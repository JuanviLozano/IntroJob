<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IdiomaController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addIdiomaAction()
    {
        return $this->render('curriculum/add_idioma.html.twig');
    }

    public function editIdiomaAction()
    {
        return $this->render('curriculum/edit_idioma.html.twig');
    }

    public function deleteIdiomaAction()
    {
        return $this->render('curriculum/delete_idioma.html.twig');
    }

}