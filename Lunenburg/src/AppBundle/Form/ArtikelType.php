<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArtikelType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
            ->add('naam', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('omschrijving', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('technischeSpecificaties', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('inkoopprijs', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('minimaleVoorraad', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('aantalVoorraad', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('bestelserie', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('magazijnFk', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('alternatiefArtikelFk', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        //zie
        //http://symfony.com/doc/current/forms.html#built-in-field-types
        //voor meer typen invoer
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Artikel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_artikel';
    }


}
