<?php
/**
 * web/index.php
 *
 * Entry point of the application
 * Responsible for loading the app and running it
 */

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

require __DIR__.'/../vendor/autoload.php';

// global app object, acts as a service container
$app = new Silex\Application();

// let's store the request object
$app['app.request'] = Request::createFromGlobals();

$config_dir = __DIR__.'/../app/Config';

require_once $config_dir.'/parameters.php';
require_once $config_dir.'/services.php';
require_once $config_dir.'/routes.php';

$app->run();
