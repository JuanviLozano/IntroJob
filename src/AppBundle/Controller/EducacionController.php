<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_educacion;
use AppBundle\Form\Usu_educacionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

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

            $this->addFlash('mansajeEdu', 'La educación ha sido insertada correctamente!');

            return $this->redirectToRoute('addEducacion');
        }

        return $this->render('curriculum/educacion/add_educacion.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editEducacionAction(Request $request, Usu_educacion $educacion)
    {
        $form = $this->createForm(Usu_educacionType::Class, $educacion);

        if($educacion->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($educacion);
            $em->flush();

            $this->addFlash('mensaje', 'Educación editada correctamente!');

            return $this->redirectToRoute('perfil');
        }

        return $this->render('curriculum/educacion/edit_educacion.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteEducacionAction(Usu_educacion $educacion)
    {
        if($educacion->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($educacion);
        $em->flush();

        $this->addFlash('mensaje', 'Educación eliminada correctamente!');

        return $this->redirectToRoute('perfil');
    }

}