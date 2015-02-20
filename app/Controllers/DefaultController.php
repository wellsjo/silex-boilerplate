<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Models\User;

class DefaultController
{
    private $app;

    /**
     * Constructor
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Example default action that gets a custom service
     * then renders a twig template
     *
     * @return Response
     */
    public function indexAction()
    {
        $message = $this->app['example_service']->getWelcomeMessage();

        return $this->app['twig']->render('home.twig', array(
            'message' => $message,
        ));
    }
}
