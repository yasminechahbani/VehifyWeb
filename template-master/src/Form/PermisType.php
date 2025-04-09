<?php

namespace App\Form;

use App\Entity\Permis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero_permis', TextType::class, [
                'label' => 'Numéro de permis',
                'attr' => [
                    'placeholder' => 'Entrez le numéro du permis',
                    'class' => 'form-control'
                ]
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Catégorie A' => 'A',
                    'Catégorie B' => 'B',
                    'Catégorie C' => 'C',
                    'Catégorie D' => 'D',
                    'Catégorie E' => 'E',
                ],
                'placeholder' => 'Sélectionnez une catégorie',
                'attr' => ['class' => 'form-select']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => 'Active',
                    'Suspended' => 'Suspended',
                    'Expired' => 'Expired',
                    'Revoked' => 'Revoked'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('date_delivrance', DateType::class, [
                'label' => 'Date de délivrance',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'max' => (new \DateTime())->format('Y-m-d')
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Permis::class,
        ]);
    }
}