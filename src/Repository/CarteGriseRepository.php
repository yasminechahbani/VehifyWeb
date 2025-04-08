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

    public function getStats(): array
    {
        return [
            'total' => $this->count([]),
            'valides' => $this->countValides(),
            'expirees' => $this->countExpirees(),
            'monthly' => $this->getMonthlyRegistrations()
        ];
    }

    public function countValides(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.dateExpiration > CURRENT_DATE()')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countExpirees(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.dateExpiration <= CURRENT_DATE()')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getMonthlyRegistrations(): array
    {
        $results = $this->createQueryBuilder('c')
            ->select('MONTH(c.dateEmission) as month, COUNT(c.id) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->getQuery()
            ->getResult();

        $monthlyData = array_fill(0, 12, 0);
        foreach ($results as $result) {
            $monthlyData[$result['month'] - 1] = $result['count'];
        }

        return $monthlyData;
    }
    public function countCartesGrises(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.idCarteGrise)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}