<?php

namespace App\Form;

use App \Entity \TAccueillis;
use Symfony \Component \Form \AbstractType;
use Symfony \Component \Form \FormBuilderInterface;
use Symfony \Component \OptionsResolver \OptionsResolver;

use Symfony \Component \Form \Extension \Core \Type \TextType;
use Symfony \Component \Form \Extension \Core \Type \TextareaType;
use Symfony \Component \Form \Extension \Core \Type \DateTimeType;
use Symfony \Component \Form \Extension \Core \Type \ChoiceType;

class TAccueillisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Qualite', ChoiceType::class)
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Date_Naissance', ChoiceType::class)
            ->add('Ville_Naissance', TextType::class)
            ->add('Ref_Nationalite', ChoiceType::class)
            ->add('Date_Arrivee', ChoiceType::class)
            ->add('Ref_Prescripteur', ChoiceType::class)
            ->add('Isole', TextType::class)
            ->add('Ref_Accueilli_Famille', ChoiceType::class)
            ->add('Sexe', ChoiceType::class)
            ->add('Adulte', ChoiceType::class)
            ->add('actif', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAccueillis::class,
        ]);
    }
}
