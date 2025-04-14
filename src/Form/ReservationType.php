<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Service;
use App\Entity\User;
use App\Entity\Vehicule;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateReservation', null, [
                'widget' => 'single_text',
                'empty_data' => false,
            ])
            ->add('heureReservation', null, [
                'empty_data' => '',
            ])
            ->add('userId', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'placeholder' => 'Sélectionner un utilisateur',
                'empty_data' => '',
            ])
            ->add('serviceId', EntityType::class, [
                'class' => Service::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionner un service',
                'empty_data' => '',
            ])
            ->add('vehiculeId', EntityType::class, [
                'class' => Vehicule::class,
                'choice_label' => 'immatriculation',
                'placeholder' => 'Sélectionner un véhicule',
                'empty_data' => '',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
