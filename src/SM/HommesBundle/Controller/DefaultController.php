<?php

namespace SM\HommesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMHommesBundle:Default:index.html.twig');
    }
}
