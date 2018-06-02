<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Usu_conocimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tipo', TextType::Class, array(
                'label' => 'Tipo',
                'attr' => array('placeholder' => 'Universidad',),
                'required' => true
            ))
            ->add('especialidad', TextType::Class, array(
                'label' => 'Especialidad',
                'attr' => array('placeholder' => 'Informática',),
                'required' => true
            ))
            ->add('descripcion', TextareaType::Class, array(
                'label' => 'Descripción',
                'attr' => array('placeholder' => 'Escriba una descripción breve de sus estudios...'),
                'required' => false
            ))
            ->add('centro', TextType::Class, array(
                'label' => 'Centro',
                'attr' => array('placeholder' => 'Universidad de Murcia')
            ))
            ->add('enviar', SubmitType::Class, array(
                'label' => 'Guardar'
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usu_conocimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usu_conocimiento';
    }


}
