<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EducacionCurriculum extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addEducacionAction()
    {
        return $this->render('curriculum/add_educacion.html.twig');
    }

    public function editEducacionAction()
    {
        return $this->render('curriculum/edit_educacion.html.twig');
    }

    public function deleteEducacionAction()
    {
        return $this->render('curriculum/delete_educacion.html.twig');
    }

}