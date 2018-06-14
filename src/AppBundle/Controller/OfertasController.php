<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Empresa;
use AppBundle\Entity\Oferta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfertasController extends Controller
{
    public function ofertasAction(Oferta $oferta)
    {
        $id = $oferta->getEmpresa();

        $empresa = $this->getDoctrine()
                        ->getRepository(Empresa::Class)
                        ->find($id);

        $trabajos = $this->getDoctrine()
                         ->getRepository(Oferta::Class)
                         ->findAll();

        return $this->render('oferta/oferta.html.twig', array(
            'ofertas' => $oferta,
            'empresa' => $empresa,
            'trabajos' => $trabajos
        ));
    }
}
