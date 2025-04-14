<?php

namespace App\Form;

use App\Entity\Facture;
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

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroFacture', TextType::class, [
                'label' => 'Numéro de facture',
                'attr' => ['class' => 'form-control']
            ])
            ->add('dateFacturation', DateTimeType::class, [
                'label' => 'Date de facturation',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant',
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Payée' => 'Payée',
                    'En attente' => 'En attente',
                    'Annulée' => 'Annulée'
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('paiement', EntityType::class, [
                'class' => Paiement::class,
                'choice_label' => function (Paiement $paiement) {
                    return $paiement->getId() . ' - ' . $paiement->getNomTitulaireCarte() . ' - ' . $paiement->getPrix() . '€';
                },
                'label' => 'Paiement',
                'attr' => ['class' => 'form-control']
            ])
            ->add('reservation', EntityType::class, [
                'class' => Reservation::class,
                'choice_label' => function (Reservation $reservation) {
                    return $reservation->getId() . ' - ' . $reservation->getDateReservation()->format('d/m/Y') . ' - ' . $reservation->getHeureReservation();
                },
                'label' => 'Réservation',
                'attr' => ['class' => 'form-control']
            ])
            ->add('stripeChargeId', TextType::class, [
                'label' => 'ID de transaction Stripe',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}