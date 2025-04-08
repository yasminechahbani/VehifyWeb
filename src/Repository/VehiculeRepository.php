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

    public function getStats(): array
    {
        return [
            'total' => $this->count([]),
            'types' => $this->countByType(),
            'status_values' => $this->countByStatus()
        ];
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

    public function countByType(): array
    {
        $results = $this->createQueryBuilder('v')
            ->select('v.type, COUNT(v.idVehicule) as count')
            ->groupBy('v.type')
            ->getQuery()
            ->getResult();

        $types = [];
        foreach ($results as $result) {
            $types[$result['type']] = $result['count'];
        }

        return $types;
    }

    public function countByStatus(): array
    {
        // Supposons que 'statut' est le nom du champ dans votre entité Vehicule
        $results = $this->createQueryBuilder('v')
            ->select('v.statut, COUNT(v.idVehicule) as count')
            ->groupBy('v.statut')
            ->getQuery()
            ->getResult();

        // Adaptez selon vos statuts réels
        $statusCounts = [
            'Disponible' => 0,
            'En service' => 0,
            'En panne' => 0
        ];

        foreach ($results as $result) {
            if (isset($statusCounts[$result['statut']])) {
                $statusCounts[$result['statut']] = $result['count'];
            }
        }

        return array_values($statusCounts);
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



}