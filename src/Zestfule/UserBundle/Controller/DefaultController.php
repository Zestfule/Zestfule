<?php

namespace Zestfule\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZestfuleUserBundle:Default:index.html.twig');
    }
}
