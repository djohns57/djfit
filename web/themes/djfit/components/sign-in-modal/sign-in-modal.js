const TRIGGER_SEL = '[data-signin-trigger], [href="#signin-modal"]';

function initSignInModal() {
  const modal = document.querySelector(".signin-modal");
  if (!modal || modal.dataset.signinInit) return;
  modal.dataset.signinInit = "1";

  const backdrop = modal.querySelector(".signin-modal__backdrop");
  const closeBtn = modal.querySelector(".signin-modal__close");
  const firstInput = modal.querySelector(".signin-modal__input");
  let lastTrigger = null;

  function open() {
    modal.setAttribute("aria-hidden", "false");
    document.documentElement.classList.add("signin-modal-open");
    firstInput?.focus();
  }

  function close() {
    modal.setAttribute("aria-hidden", "true");
    document.documentElement.classList.remove("signin-modal-open");
    lastTrigger?.focus();
  }

  document.querySelectorAll(TRIGGER_SEL).forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      e.preventDefault();
      lastTrigger = trigger;
      open();
    });
  });

  backdrop.addEventListener("click", close);
  closeBtn.addEventListener("click", close);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.getAttribute("aria-hidden") === "false") {
      close();
    }
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initSignInModal);
} else {
  initSignInModal();
}

if (typeof window.Drupal !== "undefined") {
  window.Drupal.behaviors.signInModal = {
    attach() {
      initSignInModal();
    },
  };
}
