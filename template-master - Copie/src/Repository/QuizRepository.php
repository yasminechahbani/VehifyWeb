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

    public function hasPassedQuiz(int $userId): bool
    {
        $result = $this->createQueryBuilder('q')
            ->select('COUNT(q.id)')
            ->where('q.idUser = :userId')
            ->andWhere('UPPER(q.statut) = UPPER(:status)')
            ->setParameter('userId', $userId)
            ->setParameter('status', 'Passed')
            ->getQuery()
            ->getSingleScalarResult();

        return $result > 0;
    }
    // In QuizRepository
// src/Repository/QuizRepository.php

public function findQuizIdByUserId(?int $userId): ?Quiz
{
    if ($userId === null) {
        return null;  // Or throw an exception, depending on your needs
    }

    return $this->createQueryBuilder('q')
        ->innerJoin('q.user', 'u')
        ->where('u.id = :userId')
        ->setParameter('userId', $userId)
        ->getQuery()
        ->getOneOrNullResult();
}

/*public function findQuizIdByUserId($userId)
{
    return $this->createQueryBuilder('q')
        ->where('q.idUser = :userId')
        ->setParameter('userId', $userId)
        ->getQuery()
        ->getOneOrNullResult();
}
*/

}