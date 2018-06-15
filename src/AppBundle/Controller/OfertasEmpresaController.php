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

        $cuantas = $this->getDoctrine()
                        ->getRepository(Oferta::Class)
                        ->count($id);

        $activos = $this->getDoctrine()
                        ->getRepository(Oferta::Class)
                        ->activos($id);

        return $this->render('empresarios/ofertas/ofertasEmpresa.html.twig', array(
            'ofertas' => $ofertas,
            'cuantas' => $cuantas,
            'activos' => $activos
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
            $oferta->setFechaCreacion(date('d-m-Y H:i:s'));
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

    public function editOfertaAction(Request $request, Oferta $oferta)
    {
        $form = $this->createForm(OfertaType::Class, $oferta);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            if($oferta->getEmpresa() != $this->getUser()) {
                throw new AccessDeniedHttpException();
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($oferta);
            $em->flush();

            $this->addFlash('mensaje', 'La oferta se ha editado correctamente!');

            return $this->redirectToRoute('ofertasEmp');
        }

        return $this->render('empresarios/ofertas/editOferta.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteOfertaAction(Oferta $oferta)
    {
        if($oferta->getEmpresa() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($oferta);
        $em->flush();

        return $this->redirectToRoute('ofertasEmp');
    }
}
