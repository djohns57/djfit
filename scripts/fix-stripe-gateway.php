<?php
/**
 * Fix Stripe payment gateway:
 * - Switch authentication_method from stripe_connect -> api_keys
 * - Clear publishable_key and secret_key from DB (supplied via env/settings.php)
 */
$gateway = \Drupal::entityTypeManager()
  ->getStorage('commerce_payment_gateway')
  ->load('stripe');

if (!$gateway) {
  print "ERROR: Stripe payment gateway not found.\n";
  return;
}

$config = $gateway->get('configuration');
$config['authentication_method'] = 'api_keys';
$config['publishable_key'] = '';
$config['secret_key'] = '';
// Keep mode as test, access_token/stripe_user_id empty (not using Stripe Connect)
$config['access_token'] = '';
$config['stripe_user_id'] = '';

$gateway->set('configuration', $config);
$gateway->save();

print "Stripe gateway updated:\n";
print "  authentication_method => api_keys\n";
print "  publishable_key       => (cleared — supplied by STRIPE_PUBLISHABLE_KEY env)\n";
print "  secret_key            => (cleared — supplied by STRIPE_SECRET_KEY env)\n";
print "  mode                  => " . $config['mode'] . "\n";
