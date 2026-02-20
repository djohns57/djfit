<?php
$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => 'djfit']);
$found = FALSE;
foreach ($blocks as $b) {
  if (strpos($b->id(), 'cart') !== FALSE || strpos($b->getPluginId(), 'cart') !== FALSE) {
    print $b->id() . ' | region: ' . $b->getRegion() . ' | plugin: ' . $b->getPluginId() . PHP_EOL;
    $found = TRUE;
  }
}
if (!$found) {
  print "No cart block found for djfit theme\n";
}
