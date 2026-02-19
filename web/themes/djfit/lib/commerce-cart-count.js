/**
 * @file
 * Injects the Commerce cart item count into the site-header cart link badge.
 *
 * The count is injected by ThemeHooks::preprocessPage() into drupalSettings.djfit.cartCount.
 * A <span class="site-header__cart-badge"> is appended to the cart link if absent,
 * then updated with the current count. Hidden when count is zero.
 */
(function (Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.djfitCartCount = {
    attach: function (context, settings) {
      const count = (settings.djfit && settings.djfit.cartCount) ? settings.djfit.cartCount : 0;
      const cartLinks = context.querySelectorAll('.site-header__cart-link');

      cartLinks.forEach(function (link) {
        let badge = link.querySelector('.site-header__cart-badge');

        if (!badge) {
          badge = document.createElement('span');
          badge.className = 'site-header__cart-badge';
          badge.setAttribute('aria-label', Drupal.t('@count items in cart', {'@count': count}));
          link.appendChild(badge);
        }

        badge.textContent = count;
        badge.hidden = count === 0;
        badge.setAttribute('aria-label', Drupal.t('@count items in cart', {'@count': count}));
      });
    },
  };

})(Drupal, drupalSettings);
