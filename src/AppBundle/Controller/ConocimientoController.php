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

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            var_dump($conocimiento->getUsuario());
            DIE();
            $em = $this->getDoctrine()->getManager();
            $em->persist($conocimiento);
            $em->flush();

            $this->addFlash('mensaje', 'Conocimiento creado correctamente!');

            return $this->redirectToRoute('addConocimiento');
        }

        return $this->render('curriculum/conocimiento/add_conocimiento.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editConocimientoAction()
    {
        return $this->render('curriculum/conocimiento/edit_curriculum.html.twig');
    }

    public function deleteConocimientoAction()
    {
        return $this->render('curriculum/conocimiento/delete_curriculum.html.twig');
    }

}
    