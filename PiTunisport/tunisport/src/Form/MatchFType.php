<?php

namespace App\Form;

use App\Entity\MatchF;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class MatchFType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('heureDebM')
            ->add('heurefinM')
            ->add('dateMatch')
            ->add('resultatA')
            ->add('resultatB')
            ->add('prix')
            ->add('tournoi')
            ->add('typeMatch')
            ->add('stade')
            ->add('equipeA')
            ->add('equipeB')
            ->add('nbBilletTotal')
            ->add('nbBilletReserve')
            ->add('image', FileType::class, [
                'label' => 'Brochure (PDF file)',

                
                'mapped' => false,

                
                'required' => false,

                
                'constraints' => [
                    new File([
                        'maxSize' => '200k',
                        
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ]),
                    
                    
                ],
            ])
            ->add('image2', FileType::class, [
                'label' => 'Brochure (PDF file)',

                
                'mapped' => false,

                
                'required' => false,

                
                'constraints' => [
                    new File([
                        'maxSize' => '200k',
                        
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ]),
                    
                    
                ],
            ])
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
