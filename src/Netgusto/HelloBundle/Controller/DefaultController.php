<?php

namespace Netgusto\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response('Hello, World ! <strong>' . $this->get('config.site')->getHelloTitle() . '</strong>');
    }
}
