<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Oferta;
use AppBundle\Form\OfertaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OfertasEmpresaController extends Controller
{
    public function ofertaEmpresaAction()
    {
        $id = $this->getUser()->getId();

        $ofertas = $this->getDoctrine()
                        ->getRepository(Oferta::Class)
                        ->ofertasEmpresa($id);

        return $this->render('empresarios/ofertas/ofertasEmpresa.html.twig', array(
            'ofertas' => $ofertas
        ));
    }

    public function addOfertaAction(Request $request)
    {
        $oferta = new Oferta();
        $form = $this->createForm(OfertaType::Class, $oferta);
        $id = $this->getUser();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $oferta->setEmpresa($id);
            $oferta->setFechaCreacion(date('d-m-Y h:i:s'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($oferta);
            $em->flush();

            $this->addFlash('mansaje', 'La oferta ha sido creada correctamente!');

            return $this->redirectToRoute('ofertasEmp');
        }

        return $this->render('empresarios/ofertas/addOferta.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
