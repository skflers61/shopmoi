<?php

namespace SM\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMEnfantsBundle:Default:index.html.twig');
    }
}
