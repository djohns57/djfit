<?php

declare(strict_types=1);

namespace Drupal\ai_prov_amazeeio_recipe_test_trial_access_prov;

use Drupal\ai_provider_amazeeio\TrialAccess\TrialAccountProvisionerInterface;
use Drupal\ai_provider_amazeeio\TrialAccess\TrialAccountProvisioningResult;
use Drupal\Core\State\StateInterface;

/**
 * Test trial account provisioner.
 *
 * @internal
 */
final class TestTrialAccountProvisioner implements TrialAccountProvisionerInterface {

  public function __construct(private readonly StateInterface $state) {}

  /**
   * {@inheritdoc}
   */
  public function provision(): TrialAccountProvisioningResult {
    $this->state->set(__CLASS__, 1);
    return TrialAccountProvisioningResult::Provisioned;
  }

  /**
   * Returns whether trial access provisioning was triggered or not.
   */
  public function wasTriggered(): bool {
    return (bool) $this->state->get(__CLASS__, 0);
  }

}
