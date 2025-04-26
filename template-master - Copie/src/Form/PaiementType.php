<?php

namespace App\Form;

use App\Entity\Paiement;
use App\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reservation', EntityType::class, [
                'class' => Reservation::class,
                'choice_label' => function (Reservation $reservation) {
                    return $reservation->getId() . ' - ' . $reservation->getDateReservation()->format('Y-m-d') . ' - ' . $reservation->getHeureReservation();
                },
                'placeholder' => 'Sélectionner une réservation',
                'empty_data' => '',
            ])
            ->add('numeroCarte', TextType::class, [
                'label' => 'Numéro de carte',
                'empty_data' => '',
            ])
            ->add('datePaiement', DateTimeType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'empty_data' => false,
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix',
                'empty_data' => '',
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'En attente',
                    'Confirmé' => 'Confirmé',
                    'Annulé' => 'Annulé',
                ],
                'empty_data' => '',
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Téléphone',
                'empty_data' => '',
            ])
            ->add('dateExpiration', TextType::class, [
                'label' => 'Date d\'expiration (MM/YY)',
                'empty_data' => '',
            ])
            ->add('cvv', TextType::class, [
                'label' => 'CVV',
                'empty_data' => '',
            ])
            ->add('nomTitulaireCarte', TextType::class, [
                'label' => 'Nom du titulaire de la carte',
                'empty_data' => '',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}