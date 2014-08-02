<?php

# Set up any default parameters that you want available in this file.
# Stuff like database parameters, api keys, passwords, etc.

# This is a convenient place to set the app in debug mode
$app['debug'] = true;

# Example database parameters
$app['app.db_settings'] = array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'dbname'   => '',
        'host'     => '',
        'user'     => '',
        'password' => '',
        'charset'  => '',
        'port'     => '3306'
    )
);
