<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('age')
            ->add('dateEmbauche', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'label' => 'Date d\'embauche',
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d'),
                    'class' => 'form-control'
                ],
                'required' => true,
            ])
            ->add('poste')
            ->add('tel')
            ->add('salaire')
            ->add('statut')
        
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
