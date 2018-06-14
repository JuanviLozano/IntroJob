<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Oferta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TrabajoController extends Controller
{
    public function listAction(Request $request)
    {
        $trabajos = $this->getDoctrine()
                         ->getRepository(Oferta::Class)
                         ->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $trabajos, $request->query->getInt('page',1),10
        );

        return $this->render('trabajo/lista.html.twig', array(
            'pagination' => $pagination
        ));
    }

}
