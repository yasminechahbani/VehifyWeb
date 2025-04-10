<?php

namespace App\Form;

use App\Entity\Permis;
use App\Entity\Quiz;
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
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use App\Entity\User;

class PermisType extends AbstractType
{
    private QuizRepository $quizRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(QuizRepository $quizRepository, EntityManagerInterface $entityManager)
    {
        $this->quizRepository = $quizRepository;
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // First, only add the user selection field
        $builder
            ->add('user_id', EntityType::class, [
                'class' => User::class, // Adjust this to your actual User entity
                'mapped' => false,
                'label' => 'Sélectionner un utilisateur',
                'placeholder' => 'Choisissez un utilisateur',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un utilisateur'])
                ],
                'attr' => [
                    'class' => 'form-control user-selector',
                ]
            ]);

        // Add a hidden field to track if the user has a passed quiz
        $builder->add('has_passed_quiz', HiddenType::class, [
            'mapped' => false,
            'attr' => ['class' => 'has-passed-quiz'],
            'data' => 'false'
        ]);

        // Add the remaining fields (initially hidden via JavaScript)
        $this->addPermisFields($builder);

        // Add event listener for when the form is submitted
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit']);

        // Add event listener for when the form is displayed
        $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'onPreSetData']);
    }

    public function onPreSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (isset($data['user_id'])) {
            $userId = $data['user_id'];
            $quiz = $this->quizRepository->findOneBy(['idUser' => $userId, 'statut' => 'Passed']);

            if (!$quiz) {
                // Set the hidden field to indicate no passed quiz
                $data['has_passed_quiz'] = 'false';
                $event->setData($data);
                return;
            }

            // User has passed quiz, continue with form submission
            $data['has_passed_quiz'] = 'true';
            $event->setData($data);

            // Set the quiz for the permis
            $form->get('idQuiz')->setData($quiz);
        }
    }

    public function onPreSetData(FormEvent $event)
    {
        $permis = $event->getData();
        $form = $event->getForm();

        // If we're editing an existing permis
        if ($permis && $permis->getIdPermis()) {
            // Set the hidden field to indicate user has passed quiz
            $form->get('has_passed_quiz')->setData('true');

            // Pre-select the user if editing
            if ($permis->getIdQuiz() && $permis->getIdQuiz()->getIdUser()) {
                $form->get('user_id')->setData($permis->getIdQuiz()->getIdUser());
            }
        }
    }

    private function addPermisFields(FormBuilderInterface $builder)
    {
        $builder
            ->add('idQuiz', EntityType::class, [
                'class' => Quiz::class,
                'choice_label' => 'id',
                'mapped' => true,
                'required' => true,
                'attr' => ['class' => 'form-control permis-field'],
                'label' => 'Quiz ID'
            ])
            ->add('numero_permis', TextType::class, [
                'label' => 'Numéro de permis',
                'attr' => [
                    'placeholder' => 'Entrez le numéro du permis',
                    'class' => 'form-control permis-field'
                ]
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
                'placeholder' => 'Sélectionnez une catégorie',
                'required' => true,
                'attr' => ['class' => 'form-select permis-field']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Active' => 'Active',
                    'Suspended' => 'Suspended',
                    'Expired' => 'Expired',
                    'Revoked' => 'Revoked'
                ],
                'required' => true,
                'attr' => ['class' => 'form-select permis-field']
            ])
            ->add('date_delivrance', DateType::class, [
                'label' => 'Date de délivrance',
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'attr' => [
                    'class' => 'form-control permis-field',
                    'max' => (new \DateTime())->format('Y-m-d')
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Permis::class,
            'validation_groups' => ['Default'],
        ]);
    }
}