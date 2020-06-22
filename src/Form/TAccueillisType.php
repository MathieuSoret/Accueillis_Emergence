<?php

namespace App\Form;

use App \Entity \TAccueillis;
use Symfony \Component \Form \AbstractType;
use Symfony \Component \Form \FormBuilderInterface;
use Symfony \Component \OptionsResolver \OptionsResolver;
use Doctrine \Common \Persistence \ObjectManager;

use Symfony \Component \Form \Extension \Core \Type \TextType;
use Symfony \Component \Form \Extension \Core \Type \TextareaType;
use Symfony \Component \Form \Extension \Core \Type \DateTimeType;
use Symfony \Component \Form \Extension \Core \Type \ChoiceType;

class TAccueillisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ID_Accueilli', TextType::class)
            ->add('Qualite', ChoiceType::class, [
                'choices' => $this->getChoices()
            ])
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Date_Naissance', DateTimeType::class)
            ->add('Ville_Naissance', TextType::class)
            ->add('Ref_Nationalite', ChoiceType::class, [
                'choices' => $this->getPays()
            ])
            ->add('Date_Arrivee', DateTimeType::class)
            ->add('Ref_Prescripteur', ChoiceType::class, [
                'choices' => $this->getPrescripteur()
            ])
            ->add('Sexe', ChoiceType::class, [
                'choices' => $this->getSexe()
            ])
            ->add('Isole', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAccueillis::class,
        ]);
    }

    private function getChoices()
    {
        $choices = TAccueillis::QUALITE;
        $output = [];
        foreach($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

    private function getSexe()
    {
        $choices = TAccueillis::SEXE;
        $outputS = [];
        foreach($choices as $kS => $vS) {
            $outputS[$vS] = $kS;
        }
        return $outputS;
    }

    private function getPrescripteur()
    {
        $choices = TAccueillis::PRESCRIPTEUR;
        $outputP = [];
        foreach($choices as $kP => $vP) {
            $outputP[$vP] = $kP;
        }
        return $outputP;
    }

    private function getPays()
    {
        $choices = TAccueillis::PAYS;
        $outputP = [];
        foreach($choices as $kP => $vP) {
            $outputP[$vP] = $kP;
        }
        return $outputP;
    }

}
