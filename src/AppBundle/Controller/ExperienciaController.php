<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExperienciaController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addExperienciaAction()
    {
        return $this->render('curriculum/add_experiencia.html.twig');
    }

    public function editExperienciaAction()
    {
        return $this->render('curriculum/edit_experiencia.html.twig');
    }

    public function deleteExperienciaAction()
    {
        return $this->render('curriculum/delete_experiencia.html.twig');
    }

}