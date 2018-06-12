<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
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
                'label' => 'Nombre usuario',
                'attr' => array('placeholder' => 'Nombre del usuario'),
                'required' => true
            ))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'La contraseña no es igual.',
                'options' => array('attr' => array('class' => 'password-field',
                                                   'placeholder' => '************')),
                'first_options'  => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Repetir contraseña'),
            ))
            ->add('nombre', TextType::Class, array(
                'label' => 'Nombre',
                'attr' => array('placeholder' => 'Nombre'),
                'required' => true
            ))
            ->add('apellidos', TextType::Class, array(
                'label' => 'Appelidos',
                'attr' => array('placeholder' => 'Apellidos'),
                'required' => true
            ))
            ->add('fecha_nacimiento', TextType::Class, array(
                'label' => 'Fecha de nacimiento',
                'attr' => array('placeholder' => 'dd/mm/yyyy'),
                'required' => true
            ))
            ->add('sexo', ChoiceType::Class, array(
                'label' => 'Sexo',
                'choices' => [
                    'Hombre' => 'Hombre',
                    'Mujer' => 'Mujer',
                    'Indefinido' => 'Indefinido'
                ],
                'attr' => ['class' => 'chosen']
            ))
            ->add('paises', EntityType::Class, array(
                'label' => 'Pais de origen',
                'class' => 'AppBundle:Paises',
                'choice_label' => 'nombre',
                'attr' => [
                    'class' => 'chosen'
                ]
            ))
            ->add('provincias', EntityType::Class, array(
                'label' => 'Provincia',
                'class' => 'AppBundle:Provincias',
                'choice_label' => 'provincia',
                'attr' => [
                    'class' => 'chosen'
                ]
            ))
            ->add('direccion', TextType::Class, array(
                'label' => 'Dirección',
                'attr' => array('placeholder' => 'Dirección | Opcional'),
                'required' => true
            ))
            ->add('cod_postal', TextType::Class, array(
                'label' => 'Código postal',
                'attr' => array('placeholder' => 'Código postal'),
                'required' => true
            ))

            ->add('email', EmailType::Class, array(
                'label' => 'Email',
                'attr' => array('placeholder' => 'Correo electrónico'),
                'required' => true
            ))
            ->add('telefono', TextType::Class, array(
                'label' => 'Telefono',
                'attr' => array('placeholder' => 'Teléfono móvil'),
                'required' => true
            ))
            ->add('especialidad', TextType::Class, array(
                'label' => 'Especialidad',
                'attr' => array('placeholder' => 'Ej: Programador web'),
                'required' => false
            ))
            ->add('imagen', FileType::Class, array(
                'label' => 'Imagen',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'id' => 'file-upload'
                ]
            ))
            ->add('Enviar', SubmitType::Class, array(
                'label' => 'Guardar'
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
