<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_informacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

class SecurityController extends Controller
{
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));

    }

    public function logoutAction()
    {
        return $this->redirectToRoute('login');
    }

    public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $user = new Usuario();

        $form = $this->createForm(UsuarioType::class, $user);
        $foto_antigua = $user->getImagen();
        $allpassword = $user->getPassword();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $foto = $form['imagen']->getData();
            $password = $user->getPassword();

            if($foto) {
                if($foto_antigua != 'usuario.png' && $foto_antigua) {
                    unlink('img_user/'.$foto_antigua);
                }
                $file = $form['imagen']->getData();
                $ext = $file->guessExtension();
                $file_name = time().'.'.$ext;
                $file->move('img_user',$file_name);
                $user->setImagen($file_name);
            }
            else {
                $user->setImagen('usuario.png');
            }

            if(!empty($password)) {
                $password = $passwordEncoder->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
            }
            else {
                $user->setPassword($allpassword);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('mensaje', 'El usuario ha sido registrado correctamente.');

            return $this->redirectToRoute('login');
        }

        return $this->render('security/registro.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
