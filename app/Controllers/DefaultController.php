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

    // Example default action that gets a custom service
    // then renders a twig template
    public function indexAction()
    {
        $message = $this->app['example_service']->getWelcomeMessage();

        return $this->app['twig']->render('home.twig', array(
            'message' => $message,
        ));
    }

}
