(function (Drupal) {
  'use strict';

  Drupal.behaviors.djfitNewsletterForm = {
    attach: function (context) {
      context.querySelectorAll('.newsletter-form__form:not([data-nl-attached])').forEach(function (form) {
        form.setAttribute('data-nl-attached', '1');

        var tsInput = form.querySelector('[name="_ts"]');
        if (tsInput) {
          tsInput.value = Math.floor(Date.now() / 1000);
        }

        var card = form.closest('.newsletter-form__card');
        var btn = form.querySelector('.newsletter-form__btn');
        var btnText = btn ? btn.textContent : '';
        var successEl = card ? card.querySelector('.newsletter-form__success') : null;
        var errorEl = form.querySelector('.newsletter-form__error');

        form.addEventListener('submit', function (e) {
          e.preventDefault();

          var emailInput = form.querySelector('[name="email"]');
          var email = emailInput ? emailInput.value.trim() : '';
          if (!email) {
            showError('Please enter your email address.');
            if (emailInput) emailInput.focus();
            return;
          }

          var firstNameInput = form.querySelector('[name="first_name"]');
          var honeypotInput = form.querySelector('[name="website"]');
          var tsInput = form.querySelector('[name="_ts"]');

          var interests = [];
          form.querySelectorAll('[name="interests[]"]:checked').forEach(function (cb) {
            interests.push(cb.value);
          });

          var payload = {
            email: email,
            first_name: firstNameInput ? firstNameInput.value.trim() : '',
            interests: interests,
            website: honeypotInput ? honeypotInput.value : '',
            _ts: tsInput ? parseInt(tsInput.value, 10) : 0,
          };

          btn.disabled = true;
          btn.textContent = 'Subscribing...';
          hideError();

          fetch('/api/newsletter/subscribe', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload),
          })
            .then(function (response) {
              return response.json().then(function (data) {
                return { ok: response.ok, data: data };
              });
            })
            .then(function (result) {
              if (result.ok && result.data.message) {
                form.style.display = 'none';
                if (successEl) {
                  successEl.hidden = false;
                  successEl.querySelector('.newsletter-form__success-message').textContent = result.data.message;
                }
              } else {
                showError(result.data.error || 'Something went wrong. Please try again.');
                btn.disabled = false;
                btn.textContent = btnText;
              }
            })
            .catch(function () {
              showError('Network error. Please check your connection and try again.');
              btn.disabled = false;
              btn.textContent = btnText;
            });
        });

        function showError(msg) {
          if (errorEl) {
            errorEl.textContent = msg;
            errorEl.hidden = false;
          }
        }

        function hideError() {
          if (errorEl) {
            errorEl.hidden = true;
            errorEl.textContent = '';
          }
        }
      });
    },
  };
})(Drupal);
