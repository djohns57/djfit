<?php
$provider = \Drupal::service('router.route_provider');
$routes = $provider->getAllRoutes();
foreach ($routes as $name => $route) {
  if (stripos($name, 'commerce') !== FALSE || stripos($name, 'cart') !== FALSE || stripos($name, 'checkout') !== FALSE) {
    print $name . ' => ' . $route->getPath() . PHP_EOL;
  }
}
