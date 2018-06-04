<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_informacion;
use AppBundle\Form\Usu_informacionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InformacionController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addInformacionAction(Request $request)
    {
        $informacion = new Usu_informacion();
        $form = $this->createForm(Usu_informacionType::Class, $informacion);
        $id = $this->getUser();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $informacion->setUsuario($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($informacion);
            $em->flush();

            $this->addFlash('mensaje', 'Información insertada correctamente!');

            return $this->redirectToRoute('perfil');
        }
        return $this->render('curriculum/informacion/add_informacion.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editInformacionAction(Request $request, Usu_informacion $informacion)
    {
        $form = $this->createForm(Usu_informacionType::Class, $informacion);

        if($informacion->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($informacion);
            $em->flush();

            $this->addFlash('mensaje', 'Su información ha sido enditada correctamente!');

            return $this->redirectToRoute('perfil');
        }
        return $this->render('curriculum/informacion/edit_informacion.html.twig', array(
            'form' => $form->createView()
        ));
    }
}