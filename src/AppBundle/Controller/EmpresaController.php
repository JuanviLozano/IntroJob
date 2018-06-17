<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Oferta;
use AppBundle\Form\EmpresaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EmpresaController extends Controller
{
    public function empresaAction()
    {
        $empresa = $this->getUser();
        $id = $empresa->getId();

        $cuantas = $this->getDoctrine()
                        ->getRepository(Oferta::Class)
                        ->count($id);
        $ofertas = $this->getDoctrine()
                        ->getRepository(Oferta::Class)
                        ->ofertasEmpresa($id);

        return $this->render('empresarios/perfil-empresa/perfil-empresa.html.twig', array(
            'empresa' => $empresa,
            'cuantas' => $cuantas,
            'ofertas' => $ofertas
        ));
    }

    public function editEmpresaAction(Request $request,  UserPasswordEncoderInterface $passwordEncoder)
    {
        $empresa = $this->getUser();
        $allpassword = $empresa->getPassword();
        $foto_antigua = $empresa->getImagen();
        $form = $this->createForm(EmpresaType::Class, $empresa);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $foto = $form['imagen']->getData();

            $password = $empresa->getPassword();
            if(!empty($password)) {
                $password = $passwordEncoder->encodePassword($empresa, $empresa->getPassword());
                $empresa->setPassword($password);
            }
            else {
                $empresa->setPassword($allpassword);
            }


            if($foto) {
                if($foto_antigua != $foto) {
                    unlink('img_empresa/'.$foto_antigua);
                }
                $file = $form['imagen']->getData();
                $ext = $file->guessExtension();
                $file_name = time().'.'.$ext;
                $file->move('img_empresa',$file_name);
                $empresa->setImagen($file_name);
            }
            else {
                $empresa->setImagen($foto_antigua);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();

            $this->addFlash('mensaje', 'Se han realizado los cambios correctamente');

            return $this->redirectToRoute('editEmpresa');
        }

        return $this->render('empresarios/perfil-empresa/editar-empresa.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
