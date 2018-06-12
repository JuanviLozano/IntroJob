<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpresaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::Class)
            ->add('password', PasswordType::Class)
            ->add('nombre', TextType::Class)
            ->add('alias',TextType::Class)
            ->add('municipio',TextType::Class)
            ->add('codigoPostal',TextType::Class)
            ->add('direccion',TextType::Class)
            ->add('telefono',TextType::Class)
            ->add('fax',TextType::Class)
            ->add('imagen',FileType::Class, array(
                'label' => 'Imagen',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'id' => 'file-upload'
                ]
            ))
            ->add('provincias',EntityType::Class, array(
                'label' => 'Provincias',
                'class' => 'AppBundle:Provincias',
                'choice_label' => 'provincia',
                'attr' => [
                    'class' => 'chosen'
                ]
            ))
            ->add('paises', EntityType::Class, array(
                'label' => 'Pais de origen',
                'class' => 'AppBundle:Paises',
                'choice_label' => 'nombre',
                'attr' => [
                    'class' => 'chosen'
                ]
            ))
            ->add('facebook',TextType::Class, array(
                'label' => 'Facebook',
                'attr' => array('placeholder' => 'Facebook'),
                'required' => false
            ))
            ->add('google',TextType::Class, array(
                'label' => 'Google +',
                'attr' => array('placeholder' => 'Google +'),
                'required' => false
            ))
            ->add('twitter',TextType::Class, array(
                'label' => 'Twitter',
                'attr' => array('placeholder' => 'Twitter'),
                'required' => false
            ))
            ->add('linkedin',TextType::Class, array(
                'label' => 'Linkedin',
                'attr' => array('placeholder' => 'Linkedin'),
                'required' => false
            ))
            ->add('web',TextType::Class, array(
                'label' => 'Sitio Web',
                'attr' => array('placeholder' => 'Sitio web'),
                'required' => false
            ))
            ->add('descripcion',TextType::Class, array(
                'label' => 'Descripción',
                'attr' => array('placeholder' => 'Una descripción breve de la empresa...'),
                'required' => false
            ))
            ->add('enviar', SubmitType::Class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Empresa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_empresa';
    }


}
