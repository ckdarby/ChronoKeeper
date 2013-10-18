<?php

namespace Ckdarby\ChronoKeeperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CkdarbyChronoKeeperBundle:Default:index.html.twig');
    }
}
