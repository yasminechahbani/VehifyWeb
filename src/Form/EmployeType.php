<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email', EmailType::class)
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
            ->add('idService', EntityType::class, [
                'class' => Service::class,
                'choice_label' => 'nom', // Display the employee's name
                'placeholder' => 'Sélectionner un service',
                'label' => 'service',
                'required' => true,
           ])  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}