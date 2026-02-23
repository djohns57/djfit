<?php

declare(strict_types=1);

namespace Drupal\djfit\Hook;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Breadcrumb\ChainBreadcrumbBuilderInterface;
use Drupal\Core\Controller\TitleResolverInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Extension\ThemeExtensionList;
use Drupal\Core\Extension\ThemeSettingsProvider;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\djfit\RenderCallbacks;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\node\NodeInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Contains hook implementations for DJ Fit.
 */
final class ThemeHooks {

  /**
   * The Drupal root.
   */
  private static ?string $appRoot = NULL;

  public function __construct(
    private readonly ConfigFactoryInterface $configFactory,
    private readonly ThemeSettingsProvider $themeSettings,
    private readonly RequestStack $requestStack,
    private readonly ThemeExtensionList $themeList,
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly RouteMatchInterface $routeMatch,
    private readonly TitleResolverInterface $titleResolver,
    private readonly ChainBreadcrumbBuilderInterface $breadcrumb,
    private readonly ModuleHandlerInterface $moduleHandler,
    #[Autowire(param: 'app.root')] string $appRoot,
  ) {
    self::$appRoot ??= $appRoot;
  }

  /**
   * Implements hook_element_info_alter().
   */
  #[Hook('element_info_alter')]
  public function alterElementInfo(array &$info): void {
    $info['component']['#pre_render'][] = [RenderCallbacks::class, 'preRenderComponent'];
  }

  /**
   * Implements hook_library_info_alter().
   */
  #[Hook('library_info_alter')]
  public function alterLibraryInfo(array &$libraries, string $extension): void {
    $override = static function (string $name, string $replacement) use (&$libraries): void {
      $old_parents = ['global', 'css', 'theme', $name];
      $new_parents = [...array_slice($old_parents, 0, -1), $replacement];
      $css_settings = NestedArray::getValue($libraries, $old_parents);
      NestedArray::setValue($libraries, $new_parents, $css_settings);
      NestedArray::unsetValue($libraries, $old_parents);
    };
    if ($extension === 'djfit') {
      if (file_exists(self::$appRoot . '/theme.css')) {
        $override('src/theme.css', '/theme.css');
      }
      if (file_exists(self::$appRoot . '/fonts.css')) {
        $override('src/fonts.css', '/fonts.css');
      }
    }
  }

  /**
   * Implements hook_form_FORM_ID_alter().
   */
  #[Hook('form_system_theme_settings_alter')]
  public function themeSettingsFormAlter(array &$form): void {
    $form['scheme'] = [
      '#type' => 'radios',
      '#title' => t('Color scheme'),
      '#default_value' => $this->themeSettings->getSetting('scheme'),
      '#options' => [
        'light' => t('Light'),
        'dark' => t('Dark'),
      ],
    ];
  }

  /**
   * Implements template_preprocess_image_widget().
   */
  #[Hook('preprocess_image_widget')]
  public function preprocessImageWidget(array &$variables): void {
    $data = &$variables['data'];

    // This prevents image widget templates from rendering preview container
    // HTML to users that do not have permission to access these previews.
    // @todo revisit in https://drupal.org/node/953034
    // @todo revisit in https://drupal.org/node/3114318
    if (isset($data['preview']['#access']) && $data['preview']['#access'] === FALSE) {
      unset($data['preview']);
    }
  }

  /**
   * Implements template_preprocess_block() for branding block.
   */
  #[Hook('preprocess_block')]
  public function preprocessBlock(array &$variables): void {
    $plugin_id = $variables['base_plugin_id'] ?? ($variables['plugin_id'] ?? '');
    if ($plugin_id !== 'system_branding_block') {
      return;
    }
    // Always provide site_name for JPS ENTERPRISE + DJ Fit branding,
    // even when use_site_name is false in block config.
    if (empty($variables['site_name'])) {
      $variables['site_name'] = $this->configFactory->get('system.site')->get('name') ?: 'DJ Fit';
    }
  }

  /**
   * Implements template_preprocess_html().
   */
  #[Hook('preprocess_html')]
  public function preprocessHtml(array &$variables): void {
    $variables['scheme'] = $this->themeSettings->getSetting('scheme');
    // Get the theme base path for font preloading.
    $variables['djfit_path'] = $this->requestStack->getCurrentRequest()->getBasePath() . '/' . $this->themeList->getPath('djfit');
  }

  /**
   * Implements template_preprocess_page().
   */
  #[Hook('preprocess_page')]
  public function preprocessPage(array &$variables): void {
    // @see \Drupal\Core\Block\Plugin\Block\PageTitleBlock::build()
    $variables['title'] = [
      '#type' => 'page_title',
      '#title' => $variables['page']['#title'] ?? $this->titleResolver->getTitle(
        $this->requestStack->getCurrentRequest(),
        $this->routeMatch->getRouteObject(),
      ),
    ];

    // @see \Drupal\system\Plugin\Block\SystemBreadcrumbBlock::build()
    $variables['breadcrumb'] = $this->breadcrumb->build($this->routeMatch)
      ->toRenderable();

    $route_name = $this->routeMatch->getRouteName();
    $variables['is_commerce_product'] = ($route_name === 'entity.commerce_product.canonical');
    if ($route_name === 'entity.canvas_page.canonical' || str_starts_with($this->routeMatch->getRouteObject()?->getPath() ?? '', '/canvas/')) {
      $variables['rendered_by_canvas'] = TRUE;
    }
    elseif ($route_name === 'entity.node.canonical' && $this->moduleHandler->moduleExists('canvas')) {
      $node = $this->routeMatch->getParameter('node');
      assert($node instanceof NodeInterface);

      $variables['rendered_by_canvas'] = (bool) $this->entityTypeManager->getStorage('content_template')
        ->getQuery()
        ->accessCheck(FALSE)
        ->count()
        ->condition('content_entity_type_id', 'node')
        ->condition('content_entity_type_bundle', $node->getType())
        ->condition('content_entity_type_view_mode', 'full')
        ->condition('status', TRUE)
        ->execute();
    }
    else {
      $variables['rendered_by_canvas'] = FALSE;
    }

    // Inject Commerce cart count into drupalSettings for the site-header badge.
    // The site-header is Canvas-managed and cannot consume Drupal block output
    // directly; a JS behavior reads this value and updates the badge element.
    if (\Drupal::hasService('commerce_cart.cart_provider')) {
      try {
        $count = 0;
        foreach (\Drupal::service('commerce_cart.cart_provider')->getCarts() as $cart) {
          foreach ($cart->getItems() as $item) {
            $count += (int) $item->getQuantity();
          }
        }
        $variables['#attached']['drupalSettings']['djfit']['cartCount'] = $count;
        $variables['#attached']['library'][] = 'djfit/commerce_cart_count';
      }
      catch (\Exception $e) {
        // Silently degrade if Commerce is not fully bootstrapped.
      }
    }

    // Inject logged-in state for the navbar JS behavior that swaps
    // Sign In / Get Started buttons to My Account / Log Out.
    $account = \Drupal::currentUser();
    $variables['#attached']['drupalSettings']['djfit']['loggedIn'] = $account->isAuthenticated();
    if ($account->isAuthenticated()) {
      $variables['#attached']['drupalSettings']['djfit']['userName'] = $account->getDisplayName();
      $variables['#attached']['drupalSettings']['djfit']['userUrl'] = '/user/' . $account->id();
      $variables['#attached']['drupalSettings']['djfit']['logoutUrl'] = '/user/logout';
    }
    $variables['#attached']['library'][] = 'djfit/nav_auth_state';

    // Expose active membership status for the navbar "Member" badge.
    $roles = $account->getRoles();
    $variables['is_member'] = !empty(array_intersect(['basic_member', 'premium_member'], $roles));

    // Vary the page cache by auth state so drupalSettings reflect the
    // current user's logged-in status.
    $variables['#cache']['contexts'][] = 'user.roles:authenticated';
  }

  /**
   * Implements hook_form_alter() for the user login form.
   *
   * Redirects to the front page after sign-in, but only when no destination
   * is already set (e.g. by checkout or a 403 redirect).
   */
  #[Hook('form_alter')]
  public function formAlterUserLogin(array &$form, FormStateInterface $form_state, string $form_id): void {
    if ($form_id !== 'user_login_form') {
      return;
    }
    $form['actions']['submit']['#submit'][] = [static::class, 'redirectToFront'];
  }

  /**
   * Submit handler: sends the user to the front page after login.
   *
   * Respects an existing destination (checkout, 403 redirect, etc.).
   */
  public static function redirectToFront(array &$form, FormStateInterface $form_state): void {
    $request = \Drupal::request();
    if ($request->query->has('destination') || $request->request->has('destination')) {
      return;
    }
    $form_state->setRedirect('<front>');
  }

  /**
   * Implements hook_form_alter() for the add-to-cart form.
   *
   * Enforces one membership plan per cart: clears existing items before
   * adding. Hides the quantity field. Redirects to /cart after submit.
   */
  #[Hook('form_alter')]
  public function formAlterAddToCart(array &$form, FormStateInterface $form_state, string $form_id): void {
    if (!str_starts_with($form_id, 'commerce_order_item_add_to_cart_form')) {
      return;
    }

    if (isset($form['quantity'])) {
      $form['quantity']['#attributes']['class'][] = 'visually-hidden';
    }

    $form['actions']['submit']['#submit'][] = [static::class, 'redirectToCart'];
    if (isset($form['actions']['submit']['#submit'])) {
      array_unshift($form['actions']['submit']['#submit'], [static::class, 'clearCartBeforeAdd']);
    }
  }

  /**
   * Submit handler: empties all carts so only one plan can be purchased.
   */
  public static function clearCartBeforeAdd(array &$form, FormStateInterface $form_state): void {
    if (!\Drupal::hasService('commerce_cart.cart_provider')) {
      return;
    }
    $cart_provider = \Drupal::service('commerce_cart.cart_provider');
    $cart_manager = \Drupal::service('commerce_cart.cart_manager');
    foreach ($cart_provider->getCarts() as $cart) {
      foreach ($cart->getItems() as $item) {
        $cart_manager->removeOrderItem($cart, $item);
      }
    }
  }

  /**
   * Submit handler: redirects to the cart page after adding a plan.
   */
  public static function redirectToCart(array &$form, FormStateInterface $form_state): void {
    $form_state->setRedirect('commerce_cart.page');
  }

}
