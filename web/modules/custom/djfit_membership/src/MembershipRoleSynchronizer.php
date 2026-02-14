<?php

declare(strict_types=1);

namespace Drupal\djfit_membership;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Psr\Log\LoggerInterface;

final class MembershipRoleSynchronizer {

  public function __construct(
    private readonly ConfigFactoryInterface $configFactory,
    private readonly EntityTypeManagerInterface $entityTypeManager,
    private readonly LoggerInterface $logger,
  ) {}

  /**
   * Sync roles for one commerce_subscription entity.
   */
  public function syncFromSubscription(EntityInterface $subscription): void {
    if ($subscription->getEntityTypeId() !== 'commerce_subscription') {
      return;
    }

    $user = $this->resolveCustomer($subscription);
    if (!$user) {
      $this->logger->warning('Unable to resolve user for subscription {id}.', [
        'id' => (string) $subscription->id(),
      ]);
      return;
    }

    $config = $this->configFactory->get('djfit_membership.settings');
    $planRoleMap = $config->get('plan_role_map') ?? [];
    $activeStates = $config->get('active_states') ?? ['active'];
    if (!$planRoleMap) {
      return;
    }

    $mappedRole = $this->resolveMappedRole($subscription, $planRoleMap);
    $state = $this->resolveState($subscription);
    $managedRoleIds = array_values(array_unique(array_filter($planRoleMap)));

    if (!$mappedRole) {
      $this->logger->notice('No plan-role mapping found for subscription {id}.', [
        'id' => (string) $subscription->id(),
      ]);
      return;
    }

    // Remove stale managed roles first so users keep only one membership tier.
    foreach ($managedRoleIds as $managedRoleId) {
      if ($managedRoleId !== $mappedRole && $user->hasRole($managedRoleId)) {
        $user->removeRole($managedRoleId);
      }
    }

    $isActive = in_array($state, $activeStates, TRUE);
    if ($isActive && !$user->hasRole($mappedRole)) {
      $user->addRole($mappedRole);
    }
    elseif (!$isActive && $user->hasRole($mappedRole)) {
      $user->removeRole($mappedRole);
    }

    $user->save();
  }

  /**
   * Resolves the user who owns the subscription.
   */
  private function resolveCustomer(EntityInterface $subscription): ?EntityInterface {
    if (method_exists($subscription, 'getCustomer')) {
      $customer = $subscription->getCustomer();
      if ($customer) {
        return $customer;
      }
    }

    if ($subscription->hasField('uid') && !$subscription->get('uid')->isEmpty()) {
      $uid = (int) $subscription->get('uid')->target_id;
      $user = $this->entityTypeManager->getStorage('user')->load($uid);
      return $user instanceof EntityInterface ? $user : NULL;
    }

    return NULL;
  }

  /**
   * Resolves the mapped role by matching subscription plan identifiers.
   *
   * Supported keys in plan_role_map are SKU, variation ID, variation UUID,
   * or subscription bundle as a fallback.
   */
  private function resolveMappedRole(EntityInterface $subscription, array $planRoleMap): ?string {
    $candidateKeys = [];

    if (method_exists($subscription, 'getOrderItem')) {
      $orderItem = $subscription->getOrderItem();
      if ($orderItem && method_exists($orderItem, 'getPurchasedEntity')) {
        $purchasedEntity = $orderItem->getPurchasedEntity();
        if ($purchasedEntity) {
          if (method_exists($purchasedEntity, 'getSku')) {
            $candidateKeys[] = (string) $purchasedEntity->getSku();
          }
          $candidateKeys[] = (string) $purchasedEntity->id();
          if (method_exists($purchasedEntity, 'uuid')) {
            $candidateKeys[] = (string) $purchasedEntity->uuid();
          }
        }
      }
    }

    $candidateKeys[] = $subscription->bundle();

    foreach ($candidateKeys as $candidateKey) {
      if ($candidateKey !== '' && isset($planRoleMap[$candidateKey])) {
        return (string) $planRoleMap[$candidateKey];
      }
    }

    return NULL;
  }

  /**
   * Resolves the subscription state machine value.
   */
  private function resolveState(EntityInterface $subscription): string {
    if (method_exists($subscription, 'getState')) {
      $state = $subscription->getState();
      if ($state && method_exists($state, 'getId')) {
        return (string) $state->getId();
      }
    }

    if ($subscription->hasField('state') && !$subscription->get('state')->isEmpty()) {
      return (string) $subscription->get('state')->value;
    }

    return '';
  }

}
