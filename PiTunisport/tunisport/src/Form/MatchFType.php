<?php

namespace App\Form;

use App\Entity\MatchF;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MatchFType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('HeureDebM')
            ->add('dateMatch')
            ->add('resultatA')
            ->add('resultatB')
            ->add('prix')
            ->add('tournoi')
            ->add('type')
            ->add('stade')
            ->add('equipeA')
            ->add('equipeB')
            ->add('save', SubmitType::Class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MatchF::class,
        ]);
    }
}
