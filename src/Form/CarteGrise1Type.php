<?php

namespace App\Form;

use App\Entity\CarteGrise;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class CarteGrise1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroCarteGrise', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro de carte grise est obligatoire']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'maxMessage' => 'Le numéro ne peut dépasser {{ limit }} caractères',
                        'minMessage' => 'Le numéro doit dépasser un seul caractère'
                    ])
                ]
            ])
            ->add('proprietaire', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du propriétaire est obligatoire']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'maxMessage' => 'Le nom ne peut dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('adresseProprietaire', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse est obligatoire']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 255,
                        'maxMessage' => 'L\'adresse ne peut dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('dateEmission', DateType::class, [
                'widget' => 'single_text',
                'input' => 'datetime',
                // Pas de contraintes NotBlank ici
                'required' => false // Permet une valeur null
            ])
            
          ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CarteGrise::class,
            'attr' => ['novalidate' => 'novalidate'] // Désactive la validation HTML5
        ]);
    }
}