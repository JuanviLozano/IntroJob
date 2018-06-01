<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrabajoController extends Controller
{
    public function listAction()
    {
        return $this->render('trabajo/lista.html.twig');
    }

}
