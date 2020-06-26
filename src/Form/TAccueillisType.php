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
use Symfony \Component \Form \Extension \Core \Type \DateType;
use Symfony \Component \Form \Extension \Core \Type \ChoiceType;

class TAccueillisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ID_Accueilli', TextType::class, array(
                'label' => ' ',
            ))
            ->add('Qualite', ChoiceType::class, [
                'choices' => $this->getChoices()
            ])
            ->add('Nom', TextType::class, array(
                'label' => ' ',
            ))
            ->add('Prenom', TextType::class, array(
                'label' => ' ',
            ))
            ->add('Date_Naissance', DateType::class, array(
                'years' => range(date('Y')-110, date('Y')),
                'label' => ' ',
            ))
            ->add('Ville_Naissance', TextType::class, array(
                'label' => ' ',
            ))
            ->add('Ref_Nationalite', ChoiceType::class, [
                'choices' => $this->getPays(),
                'label' => ' ',
            ])
            ->add('Date_Arrivee', DateType::class, array(
                'years' => range(date('Y')-110, date('Y')),
                'label' => ' ',
            ))
            ->add('Ref_Prescripteur', ChoiceType::class, [
                'choices' => $this->getPrescripteur(),
                'label' => ' ',
            ])
            ->add('Sexe', ChoiceType::class, [
                'choices' => $this->getSexe(),
                'label' => ' ',
            ])
            ->add('Isole', TextareaType::class, array(
                'label' => ' ',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TAccueillis::class,
        ]);
    }

    //Ici nous ajoutons a la datalist les valeurs de la base de données
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
