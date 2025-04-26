<?php

namespace App\Form;

use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'label' => 'Nom du service',
                'empty_data' => '',
            ])
            ->add('type', null, [
                'label' => 'Type de service',
                'empty_data' => '',
            ])
            ->add('heureOuverture', null, [
                'label' => 'Heure d\'ouverture',
                'empty_data' => '',
            ])
            ->add('heureFermeture', null, [
                'label' => 'Heure de fermeture',
                'empty_data' => '',
            ])
            ->add('prix', null, [
                'label' => 'Prix',
                'empty_data' => 0,
            ])
            ->add('gouvernerat', null, [
                'label' => 'Gouvernorat',
                'empty_data' => '',
            ])
            ->add('numero', null, [
                'label' => 'Numéro de téléphone',
                'empty_data' => 0,
            ])
            ->add('description', null, [
                'label' => 'Description',
                'empty_data' => '',
            ])
            ->add('email', null, [
                'label' => 'Email',
                'empty_data' => '',
            ])
            ->add('latitude', null, [
                'label' => 'Latitude',
                'empty_data' => 0,
            ])
            ->add('longitude', null, [
                'label' => 'Longitude',
                'empty_data' => 0,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}