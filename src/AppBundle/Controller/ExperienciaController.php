<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_exp_laboral;
use AppBundle\Form\Usu_exp_laboralType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExperienciaController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addExperienciaAction(Request $request)
    {
        $experiencia = new Usu_exp_laboral();
        $form = $this->createForm(Usu_exp_laboralType::Class, $experiencia);
        $id = $this->getUser();

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {


            $experiencia->setUsuario($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($experiencia);
            $em->flush();

            $this->addFlash('mensaje', 'Experiencia laboral creada correctamente!');

            return $this->redirectToRoute('addExperiencia');
        }

        return $this->render('curriculum/experiencia/add_experiencia.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editExperienciaAction(Request $request, Usu_exp_laboral $experiencia)
    {
        $form = $this->createForm(Usu_exp_laboralType::Class, $experiencia);

        if($experiencia->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($experiencia);
            $em->flush();

            $this->addFlash('mensaje', 'Experiencia editada correctamente!');

            return $this->redirectToRoute('perfil');
        }

        return $this->render('curriculum/experiencia/edit_experiencia.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteExperienciaAction(Usu_exp_laboral $experiencia)
    {
        if($experiencia->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($experiencia);
        $em->flush();

        return $this->redirectToRoute('perfil');
    }

}