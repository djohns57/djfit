<?php

namespace Drupal\djfit_newsletter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\webform\Entity\Webform;
use Drupal\webform\WebformSubmissionForm;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class NewsletterSubscribeController extends ControllerBase {

  public function subscribe(Request $request): JsonResponse {
    if ($request->getContentTypeFormat() !== 'json') {
      return new JsonResponse(['error' => 'Invalid content type.'], 400);
    }

    $data = json_decode($request->getContent(), TRUE);
    if (empty($data)) {
      return new JsonResponse(['error' => 'Invalid request body.'], 400);
    }

    // Honeypot: reject if the hidden field has a value.
    if (!empty($data['website'] ?? '')) {
      return new JsonResponse(['message' => 'Thanks for subscribing!'], 200);
    }

    // Timestamp check: reject submissions faster than 3 seconds.
    $ts = (int) ($data['_ts'] ?? 0);
    if ($ts > 0 && (time() - $ts) < 3) {
      return new JsonResponse(['message' => 'Thanks for subscribing!'], 200);
    }

    $email = trim($data['email'] ?? '');
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return new JsonResponse(['error' => 'A valid email address is required.'], 422);
    }

    $first_name = trim($data['first_name'] ?? '');
    $interests = $data['interests'] ?? [];
    if (!is_array($interests)) {
      $interests = [];
    }
    $allowed = ['strength_training', 'nutrition', 'recovery', 'mindset', 'supplements'];
    $interests = array_intersect($interests, $allowed);

    $webform = Webform::load('newsletter_signup');
    if (!$webform) {
      $this->getLogger('djfit_newsletter')->error('Newsletter signup webform not found.');
      return new JsonResponse(['error' => 'Service temporarily unavailable.'], 503);
    }

    $values = [
      'webform_id' => 'newsletter_signup',
      'data' => [
        'first_name' => $first_name,
        'email' => $email,
        'interests' => array_values($interests),
      ],
    ];

    $errors = WebformSubmissionForm::validateFormValues($values);
    if (!empty($errors)) {
      return new JsonResponse([
        'error' => 'Validation failed.',
        'details' => $errors,
      ], 422);
    }

    $submission = WebformSubmissionForm::submitFormValues($values);
    if ($submission) {
      return new JsonResponse([
        'message' => "You're in! Thanks for subscribing. Keep an eye on your inbox for our latest fitness insights.",
      ], 200);
    }

    return new JsonResponse(['error' => 'Something went wrong. Please try again.'], 500);
  }

}
