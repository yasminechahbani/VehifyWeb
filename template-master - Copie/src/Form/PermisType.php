<?php

namespace App\Form;

use App\Entity\Permis;
use App\Entity\Quiz;
use App\Entity\User;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class PermisType extends AbstractType
{
    private QuizRepository $quizRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(
        QuizRepository $quizRepository, 
        EntityManagerInterface $entityManager
    ) {
        $this->quizRepository = $quizRepository;
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // If it's NOT an edit operation and is NOT a renewal, add user_id
        if (!$options['is_edit'] && !$options['is_renewal']) { 
            $builder
                ->add('user_id', EntityType::class, [
                    'class' => User::class,
                    'choice_label' => function(User $user) {
                        return $user->getNom() . ' ' . $user->getPrenom() . ' (ID: ' . $user->getId() . ')';
                    },
                    'mapped' => false,
                    'label' => 'Sélectionner un utilisateur',
                    'placeholder' => 'Choisissez un utilisateur',
                    'constraints' => [
                        new NotBlank(['message' => 'Veuillez sélectionner un utilisateur'])
                    ],
                    'attr' => ['class' => 'form-control user-selector']
                ])
                ->add('has_passed_quiz', HiddenType::class, [
                    'mapped' => false,
                    'data' => 'false'
                ]);
        }
    
        // Check if it's a renewal scenario
        if ($options['is_renewal']) {
            // For renewal, make numero_permis read-only, and auto-set 'etat' to Active
            $builder
                ->add('numero_permis', TextType::class, [
                    'label' => 'Numéro de permis',
                    'attr' => ['class' => 'form-control'],
                    'disabled' => true, // Make it read-only
                ])
                ->add('categorie', ChoiceType::class, [
                    'label' => 'Catégorie',
                    'choices' => [
                        'Catégorie A' => 'A',
                        'Catégorie B' => 'B',
                        'Catégorie C' => 'C',
                        'Catégorie D' => 'D',
                        'Catégorie E' => 'E',
                    ],
                    'attr' => ['class' => 'form-select'],
                    'disabled' => true, // Make it read-only
                ])
                ->add('etat', ChoiceType::class, [
                    'label' => 'Status',
                    'choices' => [
                        'Active' => 'Active',
                        //'Suspended' => 'Suspended',
                        //'Expired' => 'Expired',
                        //'Revoked' => 'Revoked'
                    ],
                    'data' => 'Active', // Automatically set to Active
                    'attr' => ['class' => 'form-select'],
                    'disabled' => true, // Make it read-only

                ])
                ->add('date_delivrance', DateType::class, [
                    'label' => 'Date de délivrance',
                    'widget' => 'single_text',
                    'attr' => ['class' => 'form-control'],
                    'data' => new \DateTime(), // Automatically set to today's date


                    
                ]);
        } else {
            // Add other fields for regular add/edit operations
            $this->addConditionalFields($builder);
        }
    
        // Add event listeners only if it's not an edit
        if (!$options['is_edit']) {
            $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'onPreSetData']);
            $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit']);
        }
    }
    
    


    private function addConditionalFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('numero_permis', TextType::class, [
                'label' => 'Numéro de permis',
                'attr' => ['class' => 'form-control']
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Catégorie A' => 'A',
                    'Catégorie B' => 'B',
                    'Catégorie C' => 'C',
                    'Catégorie D' => 'D',
                    'Catégorie E' => 'E',
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => 'Active',
                    'Suspended' => 'Suspended',
                    'Expired' => 'Expired',
                    'Revoked' => 'Revoked'
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('date_delivrance', DateType::class, [
                'label' => 'Date de délivrance',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function onPreSetData(FormEvent $event)
    {
        $permis = $event->getData();
        $form = $event->getForm();

        if ($permis && $permis->getIdPermis()) {
            if ($permis->getIdQuiz() && $permis->getIdQuiz()->getIdUser()) {
                $form->get('user_id')->setData($permis->getIdQuiz()->getIdUser());
                $form->get('has_passed_quiz')->setData('true');
            }
        }
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (isset($data['user_id'])) {
            $userId = $data['user_id'];
            $quiz = $this->quizRepository->findOneBy([
                'idUser' => $userId, 
                'statut' => 'Passed'
            ]);

            if ($quiz) {
                $data['has_passed_quiz'] = 'true';
                $event->setData($data);
            }
        }
    }

    /*public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Permis::class,
            'validation_groups' => function () {
                return ['Default'];
            },
        ]);
    }*/
    public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults([
        'data_class' => Permis::class,
        'is_edit' => false, // 🔥 custom option
        'is_renewal' => false, // 🔥 new custom option

    ]);
    // In configureOptions


}

}