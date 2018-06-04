<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_educacion;
use AppBundle\Form\Usu_educacionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EducacionController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addEducacionAction(Request $request)
    {
        $educacion = new Usu_educacion();
        $form = $this->createForm(Usu_educacionType::Class, $educacion);
        $id = $this->getUser();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $educacion->setUsuario($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($educacion);
            $em->flush();

            $this->addFlash('mansaje', 'La educación ha sido insertada correctamente!');

            return $this->redirectToRoute('addEducacion');
        }

        return $this->render('curriculum/educacion/add_educacion.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editEducacionAction(Request $request, Usu_educacion $educacion)
    {
        $form = $this->createForm(Usu_educacionType::Class, $educacion);

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($educacion);
            $em->flush();

            $this->addFlash('mensaje', 'La educación ha sido insertada correctamente!');

            return $this->redirectToRoute('perfil');
        }

        return $this->render('curriculum/educacion/edit_educacion.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteEducacionAction(Usu_educacion $educacion)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($educacion);
        $em->flush();

        return $this->redirectToRoute('perfil');
    }

}