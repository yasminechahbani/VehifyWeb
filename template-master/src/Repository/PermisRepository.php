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
}