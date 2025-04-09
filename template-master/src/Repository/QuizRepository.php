<?php

namespace App\Repository;

use App\Entity\Quiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Quiz>
 */
class QuizRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quiz::class);
    }

    public function save(Quiz $quiz, bool $flush = true): void
    {
        $this->getEntityManager()->persist($quiz);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Quiz $quiz, bool $flush = true): void
    {
        $this->getEntityManager()->remove($quiz);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function saveQuizRating(int $quizId, int $rating): void
    {
        $quiz = $this->find($quizId);
        if ($quiz) {
            $quiz->setRating($rating);
            $this->save($quiz);
        }
    }
}