<?php

namespace App\Form;

use App\Entity\CarteGrise;
use App\Entity\Vehicule;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('marque', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La marque est obligatoire'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'La marque doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'La marque ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('modele', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le modèle est obligatoire'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le modèle doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le modèle ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('immatriculation', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => "Le numéro d'immatriculation est obligatoire"
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[A-Z]{2}-\d{3}-[A-Z]{2}$|^\d{1,4}\s?[A-Z]{1,3}\s?\d{1,4}$/',
                        'message' => "Format d'immatriculation invalide (ex: AB-123-CD ou 1234 AB 56)"
                    ])
                ]
            ])
            ->add('type', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le type de véhicule est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 30,
                        'maxMessage' => 'Le type ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('couleur', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La couleur est obligatoire'
                    ]),
                    new Assert\Length([
                        'max' => 30,
                        'maxMessage' => 'La couleur ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('kilometrage', NumberType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le kilométrage est obligatoire'
                    ]),
                    new Assert\PositiveOrZero([
                        'message' => 'Le kilométrage doit être un nombre positif'
                    ]),
                    new Assert\LessThan([
                        'value' => 1000000,
                        'message' => 'Le kilométrage doit être inférieur à {{ compared_value }} km'
                    ])
                ]
            ])
            ->add('statut', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le statut est obligatoire'
                    ]),
                    new Assert\Choice([
                        'choices' => ['Disponible', 'En location', 'En maintenance', 'Hors service'],
                        'message' => 'Statut invalide'
                    ])
                ]
            ])
            ->add('carteGrise', EntityType::class, [
                'class' => CarteGrise::class,
                'choice_label' => 'numeroCarteGrise',
                'label' => 'Carte Grise',
                'constraints' => [
                    new Assert\NotNull([
                        'message' => 'La carte grise est obligatoire'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
            'attr' => ['novalidate' => 'novalidate'] // Désactive la validation HTML5
        ]);
    }
}