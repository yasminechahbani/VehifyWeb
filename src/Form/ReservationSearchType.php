<?php

namespace App\Form;

use App\Entity\Service;
use App\Entity\User;
use App\Entity\Vehicule;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateReservation', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Date de réservation',
            ])
            ->add('serviceId', EntityType::class, [
                'class' => Service::class,
                'choice_label' => 'nom',
                'required' => false,
                'placeholder' => 'Tous les services',
                'label' => 'Service',
            ])
            ->add('vehiculeId', EntityType::class, [
                'class' => Vehicule::class,
                'choice_label' => 'immatriculation',
                'required' => false,
                'placeholder' => 'Tous les véhicules',
                'label' => 'Véhicule',
            ])
            ->add('userId', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'required' => false,
                'placeholder' => 'Tous les clients',
                'label' => 'Client',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'method' => 'GET',
            'csrf_protection' => false,
        ]);
    }
}