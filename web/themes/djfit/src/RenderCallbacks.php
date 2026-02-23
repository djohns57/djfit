<?php

declare(strict_types=1);

namespace Drupal\djfit;

use Drupal\Core\Security\TrustedCallbackInterface;

/**
 * Implements internal callbacks to help with rendering certain SDCs.
 */
final class RenderCallbacks implements TrustedCallbackInterface {

  /**
   * Pre-render callback for SDC elements.
   *
   * @param array $element
   *   The element being rendered.
   *
   * @return array
   *   The modified element.
   */
  public static function preRenderComponent(array $element): array {
    // In the hero-blog component, convert a UNIX timestamp into a string that
    // can be passed to strtotime() by Twig's date filter.
    if ($element['#component'] === 'djfit:hero-blog' && isset($element['#props']['date']) && is_int($element['#props']['date'])) {
      $element['#props']['date'] = date('Y-m-d', $element['#props']['date']);
    }

    // Hide the "Member" badge for non-members.
    if ($element['#component'] === 'djfit:badge' && ($element['#props']['label'] ?? '') === 'Member') {
      $roles = \Drupal::currentUser()->getRoles();
      $is_member = !empty(array_intersect(['basic_member', 'premium_member'], $roles));
      if (!$is_member) {
        $element['#printed'] = TRUE;
      }
      $element['#cache']['contexts'][] = 'user.roles';
    }

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function trustedCallbacks(): array {
    return ['preRenderComponent'];
  }

}
