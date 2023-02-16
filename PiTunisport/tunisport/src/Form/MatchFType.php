<?php

namespace App\Form;

use App\Entity\MatchF;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MatchFType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('HeureDebM')
            ->add('dateMatch')
            ->add('equipeA')
            ->add('equipeB')
            ->add('typeMatch')
            ->add('stade')
            ->add('tournoi')
            ->add('resultatA')
            ->add('resultatB')
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
