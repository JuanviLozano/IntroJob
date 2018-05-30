<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PerfilController extends Controller
{
    public function perfilAction()
    {
        return $this->render('datos-personales/perfil.html.twig');
    }

    public function curriculumAction()
    {
        return $this->render('datos-personales/curriculum.html.twig');
    }

}
