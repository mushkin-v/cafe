<?php

namespace Mushkin\CafeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MushkinCafeBundle:Default:index.html.twig');
    }
}
