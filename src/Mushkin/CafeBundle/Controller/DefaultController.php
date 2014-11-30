<?php

namespace Mushkin\CafeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($slug)
    {
        return $this->render('MushkinCafeBundle:Default:index.html.twig', array('slug' => $slug));
    }

    public function filterAction($text)
    {
        return $this->render('MushkinCafeBundle:partials:_controller.html.twig', array('text' => $text));
    }
}