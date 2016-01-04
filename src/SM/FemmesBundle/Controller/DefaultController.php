<?php

namespace SM\FemmesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMFemmesBundle:Default:index.html.twig');
    }
}
