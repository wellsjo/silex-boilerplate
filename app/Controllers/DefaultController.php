<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Models\User;

class DefaultController
{

    private $app;

    // constructor
    public function __construct($app)
    {
        $this->app = $app;
    }

    // Example default action that renders a twig template
    public function indexAction()
    {
        return $this->app['twig']->render('home.twig', array(
            'user' => 'some user',
        ));
    }

}
