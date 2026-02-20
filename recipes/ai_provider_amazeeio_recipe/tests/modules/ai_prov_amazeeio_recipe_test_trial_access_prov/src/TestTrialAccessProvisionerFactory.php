<?php

declare(strict_types=1);

namespace Drupal\ai_prov_amazeeio_recipe_test_trial_access_prov;

use Drupal\ai_provider_amazeeio\TrialAccess\ProgressReporterInterface;
use Drupal\ai_provider_amazeeio\TrialAccess\TrialAccountProvisionerFactoryInterface;
use Drupal\ai_provider_amazeeio\TrialAccess\TrialAccountProvisionerInterface;
use Drupal\Core\State\StateInterface;

/**
 * Test trial access provisioner factory.
 *
 * @internal
 */
final class TestTrialAccessProvisionerFactory implements TrialAccountProvisionerFactoryInterface {

  public function __construct(private readonly StateInterface $state) {}

  /**
   * {@inheritdoc}
   */
  public function create(ProgressReporterInterface $progressReporter): TrialAccountProvisionerInterface {
    return new TestTrialAccountProvisioner($this->state);
  }

}
