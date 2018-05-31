<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use AppBundle\Form\UsuarioType;


class PerfilController extends Controller
{
    public function perfilAction()
    {
        return $this->render('datos-personales/perfil.html.twig');
    }

    public function editarPerfilAction(Request $request, Usuario $usuario, UserPasswordEncoderInterface $passwordEncoder)
    {
        $allpassword = $usuario->getPassword();
        $form = $this->createForm(UsuarioType::Class, $usuario);
        $foto = $usuario->getImagen();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            // Control de la password
            $password = $usuario->getPassword();
            if(!empty($password)) {
                $password = $passwordEncoder->encodePassword($usuario, $usuario->getPassword());
                $usuario->setPassword($password);
            }
            else {
                $usuario->setPassword($allpassword);
            }

            $foto_antigua = $usuario->getImagen();

            if($foto != 'usuario.png' || $foto == null) {
                unlink('img_user/'.$foto_antigua);
            }
            $file = $form['imagen']->getData();
            $ext = $file->guessExtension();
            $file_name = time().'.'.$ext;

            if($foto != $usuario->setImagen($file_name)) {
                $file->move('img_user',$file_name);
                $usuario->setImagen($file_name);
            }
            else {
                $usuario->setImagen($foto);
            }

            $usuario = $form->getData();
            $em = $this->getDoctrine()->getManager();

            $em->persist($usuario);
            $em->flush();
            $this->addFlash('mensaje', 'Usuario actualizado correctamente');

            return $this->redirectToRoute('perfil');

        }
        return $this->render('datos-personales/editar-usuario.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /* ---------------- CURRICULUM ---------------- */

    public function curriculumAction()
    {
        return $this->render('datos-personales/curriculum.html.twig');
    }

}
