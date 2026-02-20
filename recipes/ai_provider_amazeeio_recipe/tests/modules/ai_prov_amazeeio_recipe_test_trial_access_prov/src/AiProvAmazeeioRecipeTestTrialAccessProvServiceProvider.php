<?php

declare(strict_types=1);

namespace Drupal\ai_prov_amazeeio_recipe_test_trial_access_prov;

use Drupal\ai_provider_amazeeio\TrialAccess\TrialAccountProvisionerFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Definition;

/**
 * Registers optional container wiring for this module.
 *
 * The test fixture module must be installable without ai_provider_amazeeio.
 * For that reason, decoration is added only if the target service exists.
 *
 * No additional compiler pass is registered for this task since this is
 * just a test module.
 */
final class AiProvAmazeeioRecipeTestTrialAccessProvServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container): void {
    $exists = $container->hasDefinition(TrialAccountProvisionerFactoryInterface::class) || $container->hasAlias(TrialAccountProvisionerFactoryInterface::class);
    if (!$exists) {
      return;
    }

    $definition = new Definition(TestTrialAccessProvisionerFactory::class);
    $definition->setDecoratedService(TrialAccountProvisionerFactoryInterface::class);
    $definition->setAutowired(TRUE);
    $container->setDefinition(TestTrialAccessProvisionerFactory::class, $definition);
  }

}
