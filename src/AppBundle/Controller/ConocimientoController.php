<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_conocimiento;
use AppBundle\Form\Usu_conocimientoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConocimientoController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addConocimientoAction(Request $request)
    {
        $conocimiento = new Usu_conocimiento();
        $form = $this->createForm(Usu_conocimientoType::Class, $conocimiento);

        $id = $this->getUser();

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            $conocimiento->setUsuario($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($conocimiento);
            $em->flush();

            $this->addFlash('mensajeCono', 'Conocimiento creado correctamente!');

            return $this->redirectToRoute('addConocimiento');
        }

        return $this->render('curriculum/conocimiento/add_conocimiento.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editConocimientoAction(Request $request, Usu_conocimiento $conocimiento)
    {
        $form = $this->createForm(Usu_conocimientoType::Class, $conocimiento);

        if($conocimiento->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($conocimiento);
            $em->flush();

            $this->addFlash('mensaje', 'Conocimiento editado correctamente!');

            return $this->redirectToRoute('perfil');
        }
        return $this->render('curriculum/conocimiento/edit_conocimiento.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteConocimientoAction(Usu_conocimiento $conocimiento)
    {
        if($conocimiento->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($conocimiento);
        $em->flush();

        $this->addFlash('mensaje', 'Conocimiento eliminado correctamente!');

        return $this->redirectToRoute('perfil');
    }

}
    