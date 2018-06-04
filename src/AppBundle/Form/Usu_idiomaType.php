<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Usu_idiomaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('leido', ChoiceType::Class, array(
                    'choices' => [
                        'Alto' => 'Alto',
                        'Medio' => 'Medio',
                        'Bajo' => 'Bajo',
                        'Nativo' => 'Nativo'
                    ],
                    'attr' => ['class' => 'chosen']
                ))
                ->add('hablado', ChoiceType::Class, array(
                    'choices' => [
                        'Alto' => 'Alto',
                        'Medio' => 'Medio',
                        'Bajo' => 'Bajo',
                        'Nativo' => 'Nativo'
                    ],
                    'attr' => ['class' => 'chosen']
                ))
                ->add('escrito', ChoiceType::Class, array(
                    'choices' => [
                        'Alto' => 'Alto',
                        'Medio' => 'Medio',
                        'Bajo' => 'Bajo',
                        'Nativo' => 'Nativo'
                    ],
                    'attr' => ['class' => 'chosen']
                ))
                ->add('idiomas', EntityType::Class, array(
                    'label' => 'Idioma',
                    'class' => 'AppBundle:Idioma',
                    'choice_label' => 'idioma',
                    'attr' => [
                        'class' => 'chosen'
                    ]
                ))
                ->add('nivel', EntityType::Class, array(
                    'label' => 'Nivel',
                    'class' => 'AppBundle:Nivel',
                    'choice_label' => 'titulo',
                    'attr' => [
                        'class' => 'chosen'
                    ]
                ))
                ->add('enviar', SubmitType::Class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usu_idioma'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usu_idioma';
    }


}
