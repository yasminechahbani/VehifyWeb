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
    //for counting pending renewals//
public function countPendingRenewals(): int
{
    return $this->createQueryBuilder('p')
        ->select('COUNT(p.id_permis)')
        ->where('p.isRenewal = 1')
        ->andWhere('p.etat = :etat')
        ->setParameter('etat', 'Expired')
        ->getQuery()
        ->getSingleScalarResult();
}

// src/Repository/PermisRepository.php
// Add this method to your existing PermisRepository class

    public function findExpiredPermis(\DateTimeInterface $today): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.dateExpiration <= :today')
            ->andWhere('p.etat != :expired_status OR p.etat IS NULL')
            ->setParameter('today', $today->format('Y-m-d'))
            ->setParameter('expired_status', 'Expired')
            ->orderBy('p.dateExpiration', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function save($entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}