<?php

namespace App\Repository;

use App\Entity\Equipement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Equipement>
 */
class EquipementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equipement::class);
    }

    

    /**
     * Récupère le total des employés
     * @return int
     */
    public function getTotalEquipements(): int
    {
        return (int) $this->createQueryBuilder('e')
            ->select('COUNT(e.idEquipement)')
            ->getQuery()
            ->getSingleScalarResult();
    }
}