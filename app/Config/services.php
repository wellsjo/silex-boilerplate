<?php

# This is where we register all the services we will be using with
# Silex's dependency injection.  These are some common services.



// Controller Service Provider
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

// Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../Resources/views'));

// Custom service example
$app['example_service'] = function() {
    return new \Services\ExampleService();
};

// Doctrine MySQL
# $app->register(new Silex\Provider\DoctrineServiceProvider(), $app['app.db_settings']);

// Session Service Provider
# $app->register(new Silex\Provider\SessionServiceProvider());
# $app['session']->start();
