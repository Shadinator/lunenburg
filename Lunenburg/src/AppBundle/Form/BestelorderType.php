<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BestelorderType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aantal', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('idArtikelFk', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('idLeverancierFk', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
       
    }/**
     * {@inheritdoc}
     */


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bestelorder'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_bestelorder';
    }


}
