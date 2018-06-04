<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_idioma;
use AppBundle\Form\Usu_idiomaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IdiomaController extends Controller
{

    /* -------------- add Currículum -------------- */
    public function addIdiomaAction(Request $request)
    {
        $idioma = new Usu_idioma();
        $form = $this->createForm(Usu_idiomaType::Class, $idioma);
        $id = $this->getUser();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $idioma->setUsuario($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($idioma);
            $em->flush();

            $this->addFlash('mensaje','El idioma ha sido creado correctamente!');

            return $this->redirectToRoute('addIdioma');
        }
        return $this->render('curriculum/idioma/add_idioma.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editIdiomaAction(Request $request, Usu_idioma $idioma)
    {
        $form = $this->createForm(Usu_idiomaType::Class, $idioma);

        if($idioma->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($idioma);
            $em->flush();

            $this->addFlash('mensaje', 'Idioma editado correctamente!');

            return $this->redirectToRoute('perfil');
        }
        return $this->render('curriculum/idioma/edit_idioma.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function deleteIdiomaAction(Usu_idioma $idioma)
    {
        if($idioma->getUsuario() != $this->getUser()) {
            throw new AccessDeniedHttpException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($idioma);
        $em->flush();

        return $this->redirectToRoute('perfil');
    }

}