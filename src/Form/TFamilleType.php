<?php

namespace App\Form;

use App \Entity \TFamille;
use Symfony \Component \Form \AbstractType;
use Symfony \Component \Form \FormBuilderInterface;
use Symfony \Component \OptionsResolver \OptionsResolver;

class TFamilleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ID_Famille')
            ->add('Famille')
            //->add('Observation')
            //->add('diff')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFamille::class,
        ]);
    }
}
