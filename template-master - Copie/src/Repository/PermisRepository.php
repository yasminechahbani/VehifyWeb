<?php

namespace App\Repository;

use App\Entity\Permis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Permis>
 */
class PermisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Permis::class);
    }

    // Add your custom repository methods here
    // For example:
    public function findActivePermis()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.etat = :etat')
            ->setParameter('etat', 'Active')
            ->getQuery()
            ->getResult();
    }
    //added logic for jointure permis quiz//

    /*public function findPermisByQuiz(int $quizId): ?Permis
    {
        return $this->createQueryBuilder('p')
            ->where('p.qualifying_quiz_id = :quizId') // This is a virtual reference
            ->setParameter('quizId', $quizId)
            ->getQuery()
            ->getOneOrNullResult();
    }*/
}