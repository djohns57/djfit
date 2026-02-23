<?php
$block = \Drupal::entityTypeManager()->getStorage('block')->load('djfit_commerce_cart');
if ($block) {
  print "Cart block verified:\n";
  print "  Status: " . ($block->status() ? 'enabled' : 'disabled') . "\n";
  print "  Region: " . $block->getRegion() . "\n";
  print "  Plugin: " . $block->getPluginId() . "\n";
} else {
  print "ERROR: Cart block not found.\n";
}
