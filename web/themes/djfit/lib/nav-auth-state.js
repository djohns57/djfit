/**
 * @file
 * Swaps navbar Sign In / Get Started for My Account / Log Out when logged in.
 *
 * Reads drupalSettings.djfit.loggedIn to decide which state to render.
 * Targets the [data-signin-trigger] wrapper and the adjacent primary CTA
 * inside .navbar--links.
 */
(function (Drupal, drupalSettings, once) {
  "use strict";

  Drupal.behaviors.navAuthState = {
    attach: function (context) {
      var djfit = drupalSettings.djfit || {};
      if (!djfit.loggedIn) {
        return;
      }

      var containers = once("nav-auth-state", ".navbar--links", context);
      if (!containers.length) {
        return;
      }

      containers.forEach(function (linksContainer) {
        var signinTrigger = linksContainer.querySelector("[data-signin-trigger]");
        if (signinTrigger) {
          var accountLink = document.createElement("a");
          accountLink.href = djfit.userUrl || "/user";
          accountLink.className = signinTrigger.querySelector("button, a")?.className || "";
          accountLink.innerHTML =
            '<svg class="transition duration-300 ease-in-out group-hover:translate-x-1" aria-hidden="true"><use href=""></use></svg>' + "";

          var iconHtml =
            '<span class="transition duration-300 ease-in-out group-hover:translate-x-1">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256" fill="none" aria-hidden="true">' +
            '<path d="M208 224c0-35.3-35.8-64-80-64s-80 28.7-80 64" stroke="currentColor" stroke-width="20" stroke-linecap="round" stroke-linejoin="round"/>' +
            '<circle cx="128" cy="96" r="48" stroke="currentColor" stroke-width="20" stroke-linecap="round" stroke-linejoin="round"/>' +
            "</svg></span>";

          accountLink.innerHTML = iconHtml + (djfit.userName || Drupal.t("My Account"));
          signinTrigger.replaceWith(accountLink);
        }

        var getStartedLink = linksContainer.querySelector('a[href="/membership"]');
        if (getStartedLink) {
          var logoutLink = getStartedLink.cloneNode(false);
          logoutLink.href = djfit.logoutUrl || "/user/logout";
          logoutLink.textContent = Drupal.t("Log Out");
          getStartedLink.replaceWith(logoutLink);
        }
      });
    },
  };
})(Drupal, drupalSettings, once);
