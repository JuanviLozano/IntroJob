<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
    
    public function dentroAction() {
        return $this->render('default/dentro.html.twig');
    }

    public function funcionamosAction() {
        return $this->render('default/como_funciona.html.twig');
    }

    public function nosotrosAction() {
        return $this->render('default/nosotros.html.twig');
    }
}
