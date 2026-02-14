<?php

declare(strict_types=1);

namespace Drupal\djfit_commerce_example\Plugin\Block;

use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Session\AccountProxyInterface;

/**
 * Provides a demo block for membership and products.
 *
 * @Block(
 *   id = "djfit_membership_products_block",
 *   admin_label = @Translation("DJFit Membership + Products"),
 *   category = @Translation("Commerce")
 * )
 */
final class MembershipProductsBlock extends BlockBase implements ContainerFactoryPluginInterface {

  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly AccountProxyInterface $currentUser,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): self {
    return new self(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('current_user'),
    );
  }

  public function build(): array {
    $links = [];
    $products = $this->entityTypeManager->getStorage('commerce_product')
      ->getQuery()
      ->accessCheck(FALSE)
      ->condition('status', 1)
      ->sort('title')
      ->range(0, 20)
      ->execute();

    foreach ($products as $id) {
      $product = $this->entityTypeManager->getStorage('commerce_product')->load((int) $id);
      if (!$product) {
        continue;
      }
      $links[] = [
        '#type' => 'link',
        '#title' => $product->label(),
        '#url' => Url::fromRoute('entity.commerce_product.canonical', ['commerce_product' => $product->id()]),
      ];
    }

    $premium = in_array('premium_member', $this->currentUser->getRoles(), TRUE) ? 'Active' : 'Inactive';
    return [
      'status' => [
        '#markup' => '<p><strong>Premium membership:</strong> ' . $premium . '</p>',
      ],
      'products' => [
        '#theme' => 'item_list',
        '#title' => 'Store products',
        '#items' => $links,
      ],
      '#cache' => [
        'contexts' => ['user.roles'],
      ],
    ];
  }

}
