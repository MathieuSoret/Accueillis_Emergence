<?php

namespace App\Form;

use App \Entity \TAccueillis;
use Symfony \Component \Form \AbstractType;
use Symfony \Component \Form \FormBuilderInterface;
use Symfony \Component \OptionsResolver \OptionsResolver;

use Symfony \Component \Form \Extension \Core \Type \CheckboxType;
use Symfony \Component \Form \Extension \Core \Type \TextType;
use Symfony \Component \Form \Extension \Core \Type \TextareaType;
use Symfony \Component \Form \Extension \Core \Type \DateTimeType;
use Symfony \Component \Form \Extension \Core \Type \ChoiceType;


class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Qualite', ChoiceType::class)
            ->add('Nom', TextareaType::class)
            ->add('Prenom', TextareaType::class)
            ->add('Date_Naissance', DateTimeType::class)
            ->add('Ville_Naissance', TextareaType::class)
            ->add('Ref_Nationalite', ChoiceType::class)
            ->add('Date_Arrivee', DateTimeType::class)
            ->add('Ref_Prescripteur', ChoiceType::class)
            ->add('Isole', CheckboxType::class)
            ->add('Sexe', ChoiceType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAccueillis::class,
        ]);
    }
}
