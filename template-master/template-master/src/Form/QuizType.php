<?php

// src/Form/QuizType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $questions = $options['questions'];

        foreach ($questions as $i => $question) {
            $builder->add('answer_'.$i, ChoiceType::class, [
                'label' => $question['questionText'],
                'choices' => [
                    $question['options'][0] => substr($question['options'][0], 0, 1),
                    $question['options'][1] => substr($question['options'][1], 0, 1),
                    $question['options'][2] => substr($question['options'][2], 0, 1),
                    $question['options'][3] => substr($question['options'][3], 0, 1),
                ],
                'expanded' => true,
                'multiple' => false,
                'required' => true
            ]);
        }

        $builder->add('submit', SubmitType::class, [
            'label' => 'Submit Quiz',
            'attr' => ['class' => 'btn btn-primary']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'questions' => [],
        ]);
    }
}
