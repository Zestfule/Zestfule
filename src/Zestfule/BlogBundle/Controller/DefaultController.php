<?php

namespace Zestfule\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZestfuleBlogBundle:Default:index.html.twig');
    }
}
