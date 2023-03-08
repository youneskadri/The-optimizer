<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
<<<<<<< Updated upstream
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
=======
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

>>>>>>> Stashed changes
class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
<<<<<<< Updated upstream
        ->add('password', PasswordType::class, [
            'label' => 'Current Password',
        ])
        ->add('newPassword', PasswordType::class, [
            'label' => 'New Password',
        ])
=======
        ->add('password',RepeatedType::class,[
            'type'=>Passwordtype::class,
            'first_options'=>['label'=>'Password'],
            'second_options'=>['label'=>'Confirm Password'],

       'constraints' => [
            new NotBlank(),
            new Length([
                'min' => 8,
                'max' => 255,
                'minMessage' => 'Your password must be at least {{ limit }} characters long',
                'maxMessage' => 'Your password cannot be longer than {{ limit }} characters',
            ]),
            new Regex([
                'pattern' => '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
                'message' => 'Your password must contain at least one letter and one number',
            ]),
        ],
    ])
>>>>>>> Stashed changes
   ;
        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}