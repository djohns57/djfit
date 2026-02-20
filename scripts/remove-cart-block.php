<?php
/**
 * Remove the Commerce cart block from the djfit header region.
 *
 * The site-header is rendered by Canvas as an SDC with its own cart icon.
 * The Drupal block system's cart block was orphaned below the Canvas header.
 * Cart count is now provided via djfit_preprocess_page + drupalSettings.
 */
$block = \Drupal::entityTypeManager()->getStorage('block')->load('djfit_commerce_cart');
if (!$block) {
  print "Block djfit_commerce_cart not found — nothing to remove.\n";
  return;
}
$block->delete();
print "Removed block djfit_commerce_cart from header region.\n";
print "Cart count is now injected via drupalSettings.djfit.cartCount + JS badge.\n";
