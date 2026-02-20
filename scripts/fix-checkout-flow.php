<?php
/**
 * Add payment_information pane to the default checkout flow.
 *
 * Current pane order in order_information step:
 *   contact_information (weight 1)
 *   billing_information (weight 2)
 *
 * Adding:
 *   payment_information (weight 3)
 *
 * review, completion_message, order_summary are on separate steps — no weight conflict.
 */
$flow = \Drupal::entityTypeManager()
  ->getStorage('commerce_checkout_flow')
  ->load('default');

if (!$flow) {
  print "ERROR: Default checkout flow not found.\n";
  return;
}

$config = $flow->get('configuration');
$panes = $config['panes'];

if (isset($panes['payment_information'])) {
  print "payment_information pane already exists — skipping.\n";
  return;
}

$panes['payment_information'] = [
  'step' => 'order_information',
  'weight' => 3,
];

$config['panes'] = $panes;
$flow->set('configuration', $config);
$flow->save();

print "Checkout flow updated. Panes on order_information step:\n";
foreach ($panes as $id => $pane) {
  if ($pane['step'] === 'order_information') {
    print "  [{$pane['weight']}] {$id}\n";
  }
}
