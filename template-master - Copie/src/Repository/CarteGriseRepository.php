<?php

// src/Repository/CarteGriseRepository.php
namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\CarteGrise;

class CarteGriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarteGrise::class);
    }


    public function countCartesGrises(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.idCarteGrise)')
            ->getQuery()
            ->getSingleScalarResult();
    }
    
    public function findOneCarteGrise(int $id): ?CarteGrise
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.idCarteGrise = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

}