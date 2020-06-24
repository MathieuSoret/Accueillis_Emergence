<?php

namespace App\Form;

use App \Entity \TFamilleDetails;
use Symfony \Component \Form \AbstractType;
use Symfony \Component \Form \FormBuilderInterface;
use Symfony \Component \OptionsResolver \OptionsResolver;

use Symfony \Component \Form \Extension \Core \Type \TextType;
use Symfony \Component \Form \Extension \Core \Type \TextareaType;
use Symfony \Component \Form \Extension \Core \Type \DateTimeType;
use Symfony \Component \Form \Extension \Core \Type \DateType;
use Symfony \Component \Form \Extension \Core \Type \ChoiceType;

class TFamilleDetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Ref_Accueilli', ChoiceType::class, [
                'choices' => $this->getAccueillis(),
                'label' => ' '
            ])
            ->add('Ref_Lien', ChoiceType::class, [
                'choices' => $this->getLien(),
                'label' => ' '
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TFamilleDetails::class,
        ]);
    }

    private function getLien()
    {
        $choices = TFamilleDetails::GENRE;
        $output = [];
        foreach($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

    private function getAccueillis()
    {
        $choicesA = TFamilleDetails::ACCUEILLIS;
        $outputA = [];
        foreach($choicesA as $kA => $vA) {
            $outputA[$vA] = $kA;
        }
        return $outputA;
    }
}
