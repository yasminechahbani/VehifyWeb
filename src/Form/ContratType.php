<?php

namespace App\Form;

use App\Entity\Contrat;
use App\Entity\Employe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeContrat')
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
            ])
            
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
            ])
            ->add('salaireContrat')
            ->add('periodeEssai')
            ->add('confidentialite', ChoiceType::class, [
    'label' => 'Clause de confidentialité',
    'choices' => [
        'Oui' => 'Oui',   // Affiche "Oui", mais enregistre "Oui" dans la base de données
        'Non' => 'Non',   // Affiche "Non", mais enregistre "Non"
    ],
    'expanded' => true,  // Affiche comme des boutons radio (pour mieux voir "Oui" et "Non")
    'multiple' => false, // Un seul choix possible (oui ou non)
    'placeholder' => 'Sélectionner...', // Optionnel : permet de voir un texte d’invite
    'required' => false,
])

            
            
            
            
            ->add('preavis')
            ->add('statutContrat')
            ->add('employe', EntityType::class, [
                'class' => Employe::class,
                'choice_label' => function ($employe) {
                    return $employe->getNom() . ' ' . $employe->getPrenom();
                },
            ]);
            

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
