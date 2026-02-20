<?php
/**
 * Place the Commerce cart block in the djfit theme's header region.
 */
$block_storage = \Drupal::entityTypeManager()->getStorage('block');

// Check it doesn't already exist.
if ($block_storage->load('djfit_commerce_cart')) {
  print "Block djfit_commerce_cart already exists — skipping.\n";
  return;
}

$block = $block_storage->create([
  'id' => 'djfit_commerce_cart',
  'theme' => 'djfit',
  'region' => 'header',
  'plugin' => 'commerce_cart',
  'weight' => 10,
  'settings' => [
    'id' => 'commerce_cart',
    'label' => 'Shopping cart',
    'label_display' => '0',
    'dropdown' => TRUE,
  ],
  'visibility' => [],
  'status' => TRUE,
]);

$block->save();
print "Cart block placed:\n";
print "  ID:     djfit_commerce_cart\n";
print "  Theme:  djfit\n";
print "  Region: header\n";
print "  Weight: 10\n";
