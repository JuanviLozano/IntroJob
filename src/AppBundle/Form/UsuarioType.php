<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::Class, array(
                    'attr' => array('placeholder' => 'Nombre del usuario'),
                    'required' => true
                ))
                ->add('password', PasswordType::Class, array(
                    'attr' => array('placeholder' => '*********'),
                    'required' => true
                ))
                ->add('nombre', TextType::Class, array(
                    'attr' => array('placeholder' => 'Nombre'),
                    'required' => true
                ))
                ->add('apellidos', TextType::Class, array(
                    'attr' => array('placeholder' => 'Apellidos'),
                    'required' => true
                ))
                ->add('fecha_nacimiento', TextType::Class, array(
                    'attr' => array('placeholder' => 'dd/mm/yyyy'),
                    'required' => true
                ))
                ->add('sexo', ChoiceType::Class, array(
                    'choices' => [
                        'Hombre' => 'hombre',
                        'Mujer' => 'mujer',
                        'Indefinido' => 'indefinido'
                    ],
                    'attr' => ['class' => 'chosen']
                ))
                ->add('pais_origen', EntityType::Class, array(
                    'class' => 'AppBundle:Paises',
                    'choice_label' => 'nombre',
                    'attr' => [
                        'class' => 'chosen'
                    ]
                ))
                ->add('provincia', EntityType::Class, array(
                    'class' => 'AppBundle:Provincias',
                    'choice_label' => 'provincia',
                    'attr' => [
                        'class' => 'chosen'
                    ]
                ))
                ->add('direccion', TextType::Class, array(
                    'attr' => array('placeholder' => 'Dirección | Opcional'),
                    'required' => true
                ))
                ->add('cod_postal', TextType::Class, array(
                    'attr' => array('placeholder' => 'Código postal'),
                    'required' => true
                ))

                ->add('email', EmailType::Class, array(
                    'attr' => array('placeholder' => 'Correo electrónico'),
                    'required' => true
                ))
                ->add('telefono', TextType::Class, array(
                    'attr' => array('placeholder' => 'Teléfono móvil'),
                    'required' => true
                ))
                ->add('imagen', FileType::Class, array(
                    'required' => false,
                    'attr' => [
                        'id' => 'file-upload'
                    ]
                ))
                ->add('Enviar', SubmitType::Class, array(
                    'label' => 'Registrarse'
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usuario';
    }


}
