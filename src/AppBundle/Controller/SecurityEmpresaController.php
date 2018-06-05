<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Empresa;
use AppBundle\Form\EmpresaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityEmpresaController extends Controller
{
    public function loginAction(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('empresarios/security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $empresa = new Empresa();

        $form = $this->createForm(EmpresaType::Class, $empresa);
        $foto_antigua = $empresa->getImagen();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $foto = $form['imagen']->getData();
            if($foto) {
                if($foto_antigua != 'empresa.png' && $foto_antigua) {
                    unlink('img_empresa/'.$foto_antigua);
                }
                $file = $form['imagen']->getData();
                $ext = $file->guessExtension();
                $file_name = time().'.'.$ext;
                $file->move('img_empresa',$file_name);
                $empresa->setImagen($file_name);
            }
            else {
                $empresa->setImagen('empresa.png');
            }

            $password = $passwordEncoder->encodePassword($empresa, $empresa->getPassword());
            $empresa->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($empresa);
            $em->flush();

            $this->addFlash('mensaje', 'La empresa ha sido registrada correctamente!');

            return $this->redirectToRoute('loginEmp');
        }

        return $this->render('empresarios/security/registro.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
