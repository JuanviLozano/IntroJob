<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InformacionController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addInformacionAction()
    {
        return $this->render('curriculum/add_informacion.html.twig');
    }

    public function editInformacionAction()
    {
        return $this->render('curriculum/edit_informacion.html.twig');
    }

    public function deleteInformacionAction()
    {
        return $this->render('curriculum/delete_informacion.html.twig');
    }

}