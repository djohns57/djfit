<?php

declare(strict_types=1);

namespace Drupal\djfit_commerce_example;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Render\Markup;
use Drupal\Core\Session\AccountProxyInterface;

final class MembershipAccessManager {

  public function __construct(
    private readonly ConfigFactoryInterface $configFactory,
    private readonly AccountProxyInterface $currentUser,
  ) {}

  public function syncRoleFromSubscription(EntityInterface $subscription): void {
    if ($subscription->getEntityTypeId() !== 'commerce_subscription') {
      return;
    }

    $config = $this->configFactory->get('djfit_commerce_example.settings');
    $premiumRole = (string) $config->get('premium_role');
    $activeStates = $config->get('active_states') ?? ['active'];
    $premiumSkus = $config->get('premium_skus') ?? [];
    if ($premiumRole === '' || !$premiumSkus) {
      return;
    }

    $user = method_exists($subscription, 'getCustomer') ? $subscription->getCustomer() : NULL;
    if (!$user) {
      return;
    }

    $sku = '';
    if (method_exists($subscription, 'getPurchasedEntity') && $subscription->getPurchasedEntity()) {
      $purchased = $subscription->getPurchasedEntity();
      if (method_exists($purchased, 'getSku')) {
        $sku = (string) $purchased->getSku();
      }
    }
    if (!in_array($sku, $premiumSkus, TRUE)) {
      return;
    }

    $state = '';
    if (method_exists($subscription, 'getState') && $subscription->getState()) {
      $state = (string) $subscription->getState()->getId();
    }

    $isActive = in_array($state, $activeStates, TRUE);
    if ($isActive && !$user->hasRole($premiumRole)) {
      $user->addRole($premiumRole);
      $user->save();
      return;
    }

    if (!$isActive && $user->hasRole($premiumRole)) {
      $user->removeRole($premiumRole);
      $user->save();
    }
  }

  public function userHasPremiumRole(): bool {
    $premiumRole = (string) $this->configFactory->get('djfit_commerce_example.settings')->get('premium_role');
    return $premiumRole !== '' && in_array($premiumRole, $this->currentUser->getRoles(), TRUE);
  }

  /**
   * Builds a safe teaser/paywall replacement for full premium article view.
   */
  public function buildPaywallBody(EntityInterface $node): array {
    $config = $this->configFactory->get('djfit_commerce_example.settings');
    $paywallUrl = (string) $config->get('paywall_url');

    $summary = '';
    if ($node->hasField('body') && !$node->get('body')->isEmpty()) {
      $summary = (string) ($node->get('body')->summary ?? '');
      if ($summary === '') {
        $summary = (string) $node->get('body')->value;
      }
    }

    $teaser = [
      '#type' => 'container',
      '#attributes' => ['class' => ['premium-article-teaser']],
      'summary' => [
        '#markup' => Markup::create($summary),
      ],
      'paywall' => [
        '#markup' => '<p><strong>This content is for Premium Members.</strong> <a href="' . $paywallUrl . '">Start your membership</a>.</p>',
      ],
      '#cache' => [
        'contexts' => ['user.roles'],
      ],
    ];

    return $teaser;
  }

}
