<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Usu_exp_laboralType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('oficio', TextType::Class, array(
                    'attr' => array('placeholder' => 'Oficio realizado')
                ))
                ->add('nombreEmpresa', TextType::Class, array(
                    'attr' => array('placeholder' => 'Nombre de la empresa')
                ))
                ->add('fechaInicio', TextType::Class, array(
                    'attr' => array('placeholder' => 'mm/yyyy')
                ))
                ->add('fechaFin', TextType::Class, array(
                    'attr' => array('placeholder' => 'mm/yyyy')
                ))
                ->add('descripcion', TextareaType::Class, array(
                    'attr' => array('placeholder' => 'Una descripción del trabajo desempeñado...'),
                    'required' => false
                ))
                ->add('enviar', SubmitType::Class, array(

            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usu_exp_laboral'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usu_exp_laboral';
    }


}
