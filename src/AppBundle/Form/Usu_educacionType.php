<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class Usu_educacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tipo')
                ->add('fechaInicio')
                ->add('fechaFin')
                ->add('centro')
                ->add('descripcion', TextareaType::Class, array(
                    'label' => 'Descripción',
                    'attr' => array('placeholder' => 'Escriba una descripción breve de sus estudios...'),
                    'required' => false
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
            'data_class' => 'AppBundle\Entity\Usu_educacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usu_educacion';
    }


}
