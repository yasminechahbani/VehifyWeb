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

    public function countExpired(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.dateExpiration < CURRENT_DATE()')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countExpiringSoon(): int
    {
        $date = new \DateTime('+30 days');

        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.dateExpiration BETWEEN CURRENT_DATE() AND :date')
            ->setParameter('date', $date)
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

        $months = [];
        $counts = array_fill(0, 12, 0);

        foreach ($results as $result) {
            $monthIndex = $result['month'] - 1;
            $counts[$monthIndex] = $result['count'];
        }

        return [
            'months' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'counts' => $counts
        ];
    }
}