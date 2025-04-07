<?php

namespace App\Repository;

use App\Entity\Vehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class VehiculeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicule::class);
    }

    /**
     * Compte le nombre de véhicules dans la base de données.
     *
     * @param array $criteria Critères optionnels pour filtrer les résultats.
     * @return int Le nombre de véhicules.
     */
    // Dans le VehiculeRepository
    public function count(array $criteria = []): int
    {
        $qb = $this->createQueryBuilder('v');

        // Ajoutez des critères de filtrage si nécessaire
        foreach ($criteria as $field => $value) {
            $qb->andWhere("v.$field = :$field")
                ->setParameter($field, $value);
        }

        return (int) $qb->select('COUNT(v.idVehicule)')
            ->getQuery()
            ->getSingleScalarResult();
    }

}
