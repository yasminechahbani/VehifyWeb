<?php

// src/Form/RatingType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('rating', ChoiceType::class, [
            'label' => 'Rate this quiz:',
            'choices' => [
                '1 Star' => 1,
                '2 Stars' => 2,
                '3 Stars' => 3,
                '4 Stars' => 4,
                '5 Stars' => 5,
            ],
            'expanded' => true,
            'multiple' => false,
            'required' => true
        ]);

        $builder->add('submit', SubmitType::class, [
            'label' => 'Submit Rating',
            'attr' => ['class' => 'btn btn-primary']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
