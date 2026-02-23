<?php

declare(strict_types=1);

namespace Drupal\Tests\ai_provider_amazeeio_recipe\Composer;

use Composer\Script\Event;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Ensures the test fixture module is available under web/modules/custom.
 *
 * This class is invoked by the root project's Composer scripts (for example,
 * post-install-cmd and post-update-cmd) when this recipe is installed in a
 * test context (Drupal CI) or a local development setup.
 *
 * Why this exists:
 * - Drupal recipes are configuration-only and cannot ship executable PHP code.
 * - The recipe tests still need a lightweight fixture module.
 * - So the fixture module lives under tests/modules and is linked into the
 *   Drupal module tree during install/update.
 */
final class SymlinkTestModule {

  /**
   * Creates (or refreshes) the symlink to the fixture module.
   *
   * This method is meant to be used as a Composer script handler.
   */
  public static function ensure(Event $event): void {
    $composer = $event->getComposer();

    $vendorDir = (string) $composer->getConfig()->get('vendor-dir');
    $vendorDir = rtrim($vendorDir, '/\\');

    // Load the project's autoloader so Symfony Filesystem (and anything else)
    // is available to this script handler.
    $autoload = $vendorDir . '/autoload.php';
    if (!is_file($autoload)) {
      throw new \RuntimeException(sprintf('Composer autoloader not found at "%s".', $autoload));
    }
    require_once $autoload;

    // vendor-dir is inside the project root in typical Composer layouts,
    // we do not need to handle custom Drupal Scaffold settings.
    $projectRoot = dirname($vendorDir);

    $target = $projectRoot . '/tests/modules/ai_prov_amazeeio_recipe_test_trial_access_prov';
    $link = $projectRoot . '/web/modules/custom/ai_prov_amazeeio_recipe_test_trial_access_prov';

    if (!is_dir($target)) {
      $event->getIO()->writeError(sprintf('Fixture module not found, skipping: %s', $target));
      return;
    }

    $fs = new Filesystem();
    $fs->mkdir(dirname($link));

    // If something already exists at the destination:
    // - Refuse to delete a real directory (safety guard).
    // - Otherwise remove it so we can recreate the link cleanly.
    if (file_exists($link) || is_link($link)) {
      if (is_dir($link) && !is_link($link)) {
        throw new \RuntimeException(sprintf(
          'Refusing to replace existing directory at "%s". Remove it manually if needed.',
          $link
        ));
      }
      $fs->remove($link);
    }

    // Create a symlink, but fall back to duplicating the directory when the
    // filesystem does not support symlinks.
    $fs->symlink($target, $link, TRUE);
  }

}
