<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Permis;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_permis')
            ->add('numero_permis')
            ->add('categorie')
            ->add('date_delivrance', null, [
                'widget' => 'single_text',
            ])
            ->add('date_expiration', null, [
                'widget' => 'single_text',
            ])
            ->add('etat')
            ->add('id_service', EntityType::class, [
                'class' => Service::class,
                'choice_label' => 'id',
            ])
            ->add('id_employe', EntityType::class, [
                'class' => Employe::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Permis::class,
        ]);
    }
}
