<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Equipement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EquipementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('nom')
            ->add('description')
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Informatique' => 'informatique',
                    'RH' => 'rh',
                    'Finance' => 'finance',
                ],
                'placeholder' => 'Choisir une catégorie',
                'label' => 'Catégorie',
                'required' => true,
            ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'Neuf (100% - 5 ans)' => 'neuf',
                    'Bon état (70% de la durée)' => 'bon',
                    'Usé (40% de la durée)' => 'use',
                    'Très usé / Endommagé (10-20% de la durée)' => 'tres_use',
                    'Hors service (0%)' => 'hors_service',
                ],
                'placeholder' => 'Choisir un état',
                'label' => 'État de l\'équipement',
                'required' => true,
            ])
            
           ->add('employe', EntityType::class, [
                'class' => Employe::class,
                'choice_label' => 'nom', // Display the employee's name
                'placeholder' => 'Sélectionner un employé',
                'label' => 'Employé',
                'required' => true,
           ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipement::class,
        ]);
    }
}
