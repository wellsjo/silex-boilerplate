<?php

use \Controllers;

# Example controller instantiation

# Using this kind of setup, we can map routes to controller actions
$app['default.controller'] = $app->share(function() use ($app) {
  return new \Controllers\DefaultController($app);
});

# Example route
$app->get('/', 'default.controller:indexAction');

return $app;
