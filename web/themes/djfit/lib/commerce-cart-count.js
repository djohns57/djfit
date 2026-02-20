/**
 * @file
 * Injects the Commerce cart item count into the site-header cart link badge.
 *
 * The count is injected by ThemeHooks::preprocessPage() into drupalSettings.djfit.cartCount.
 * A <span class="site-header__cart-badge"> is appended to the cart link if absent,
 * then updated with the current count. Hidden when count is zero.
 */
(function (Drupal, drupalSettings) {
  "use strict";

  function applyBadge(link, count, badgeClass) {
    let badge = link.querySelector("." + badgeClass);

    if (!badge) {
      badge = document.createElement("span");
      badge.className = badgeClass;
      link.appendChild(badge);
    }

    badge.textContent = count;
    badge.hidden = count === 0;
    badge.setAttribute("aria-label", Drupal.t("@count items in cart", { "@count": count }));
  }

  Drupal.behaviors.djfitCartCount = {
    attach: function (context, settings) {
      const count = settings.djfit && settings.djfit.cartCount ? settings.djfit.cartCount : 0;

      context.querySelectorAll(".site-header__cart-link").forEach(function (link) {
        applyBadge(link, count, "site-header__cart-badge");
      });

      context.querySelectorAll("[data-cart-trigger]").forEach(function (link) {
        applyBadge(link, count, "navbar--cart-badge");
      });
    },
  };
})(Drupal, drupalSettings);
