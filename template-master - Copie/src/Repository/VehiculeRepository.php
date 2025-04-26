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



    public function count(array $criteria = []): int
    {
        $qb = $this->createQueryBuilder('v')
            ->select('COUNT(v.idVehicule)');

        foreach ($criteria as $field => $value) {
            $qb->andWhere("v.$field = :$field")
                ->setParameter($field, $value);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }


// src/Repository/VehiculeRepository.php

    public function countVehicules(): int
    {
        // Utilise la méthode `count` de Doctrine pour compter les enregistrements
        return $this->createQueryBuilder('v')
            ->select('COUNT(v.idVehicule)')
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function countVehiculesApprouves(): int
    {
        return $this->createQueryBuilder('v')
            ->select('COUNT(v.idVehicule)')
            ->where('v.statut = :statut')
            ->setParameter('statut', 'Visite faite')  // Filtrer par le statut "disponible"
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function countVehiculesNonApprouves(): int
    {
        return $this->createQueryBuilder('v')
            ->select('COUNT(v.idVehicule)')
            ->where('v.statut = :statut')
            ->setParameter('statut', 'Visite non faite')  // Filtrer par le statut "disponible"
            ->getQuery()
            ->getSingleScalarResult();
    }
    public function findByCarteGriseId(int $carteGriseId): array
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.id_carte_grise = :carteGriseId')
            ->setParameter('carteGriseId', $carteGriseId)
            ->orderBy('v.idVehicule', 'DESC')
            ->getQuery()
            ->getResult();
    }




}