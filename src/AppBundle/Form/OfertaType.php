<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OfertaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titulo', TextType::Class, array(
                    'attr' => array('placeholder' => 'Título de la oferta')
                ))
                ->add('provincia', EntityType::Class, array(
                    'label' => 'Provincia',
                    'class' => 'AppBundle:Provincias',
                    'choice_label' => 'provincia',
                    'attr' => [
                        'class' => 'chosen'
                    ]
                ))
                ->add('salarioInicio', TextType::Class, array(
                    'required' => false
                ))
                ->add('salarioFin', TextType::Class, array(
                    'required' => false
                ))
                ->add('tipoPago', ChoiceType::Class, array(
                    'label' => 'Tipo de pago',
                    'required' => false,
                    'choices' => [
                        'No definido' => 'No definido',
                        'Mensual' => 'mes',
                        'Anual' => 'año'
                    ],
                    'attr' => ['class' => 'chosen']
                ))
                ->add('experienciaMin', TextType::Class, array(
                    'attr' => array('placeholder' => '2 años'),
                    'required' => false
                ))
                ->add('estudiosMin', TextType::Class, array(
                    'attr' => array('placeholder' => 'Grado superior'),
                    'required' => false
                ))
                ->add('residente', EntityType::Class, array(
                    'label' => 'Provincia',
                    'required' => false,
                    'class' => 'AppBundle:Provincias',
                    'choice_label' => 'provincia',
                    'attr' => [
                        'class' => 'chosen'
                    ]
                ))
                ->add('conocimientos', TextType::Class, array(
                    'required' => false
                ))
                ->add('requisitos', TextType::Class, array(
                    'required' => false
                ))
                ->add('descripcion', TextareaType::Class, array(
                    'attr' => array('placeholder' => 'Informática'),
                    'required' => false
                ))
                ->add('industria', TextType::Class, array(
                    'attr' => array('placeholder' => 'Informática'),
                    'required' => false
                ))
                ->add('referencia', TextType::Class, array(
                    'attr' => array('placeholder' => 'Ver a que se refiere'),
                    'required' => false
                ))
                ->add('categoria', TextType::Class, array(
                    'attr' => array('placeholder' => 'Programación'),
                    'required' => false
                ))
                ->add('nivel', TextType::Class, array(
                    'attr' => array('placeholder' => 'Ver a que se refiere'),
                    'required' => false
                ))
                ->add('nVacantes', TextType::Class, array(
                    'attr' => array('placeholder' => '20'),
                    'required' => false
                ))
                ->add('duracionContrato', TextType::Class, array(
                    'attr' => array('placeholder' => '2 años'),
                    'required' => false
                ))
                ->add('personalCargo', TextType::Class, array(
                    'attr' => array('placeholder' => 'CEO'),
                    'required' => false
                ))
                ->add('estado', ChoiceType::Class, array(
                    'label' => 'Estado',
                    'choices' => [
                        'Activo' => '1',
                        'Inactivo' => '0'
                    ],
                    'attr' => ['class' => 'chosen']
                ))
            ->add('horario', ChoiceType::Class, array(
                'label' => 'Horario',
                'choices' => [
                    'No definido' => 'No definido',
                    'Jornada partida' => 'Jornada partida',
                    'Jornada completa' => 'Jornada completa'
                ],
                'attr' => ['class' => 'chosen']
            ))
                ->add('enviar', SubmitType::Class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Oferta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_oferta';
    }


}
