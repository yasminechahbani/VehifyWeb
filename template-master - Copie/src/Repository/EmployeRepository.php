<?php

namespace App\Repository;

use App\Entity\Employe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Employe>
 */
class EmployeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employe::class);
    }

    /**
     * Récupère la distribution des âges des employés
     * @return array
     */
    public function getAgeDistribution(): array
    {
        return $this->createQueryBuilder('e')
            ->select('
                SUM(CASE WHEN e.age BETWEEN 18 AND 25 THEN 1 ELSE 0 END) as age_18_25,
                SUM(CASE WHEN e.age BETWEEN 26 AND 35 THEN 1 ELSE 0 END) as age_26_35,
                SUM(CASE WHEN e.age BETWEEN 36 AND 45 THEN 1 ELSE 0 END) as age_36_45,
                SUM(CASE WHEN e.age BETWEEN 46 AND 55 THEN 1 ELSE 0 END) as age_46_55,
                SUM(CASE WHEN e.age >= 56 THEN 1 ELSE 0 END) as age_56_plus
            ')
            ->getQuery()
            ->getSingleResult();
    }

    /**
     * Récupère le total des employés
     * @return int
     */
    public function getTotalEmployes(): int
    {
        return (int) $this->createQueryBuilder('e')
            ->select('COUNT(e.idEmploye)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByName(string $name): array
    {
        return $this->createQueryBuilder('e')
            ->where('LOWER(e.nom) LIKE LOWER(:name) OR LOWER(e.prenom) LIKE LOWER(:name)')
            ->setParameter('name', '%' . strtolower($name) . '%')
            ->getQuery()
            ->getResult();
    }
    
    public function ChercherEMPLOYEESelonEmailAndPassword(string $email, string $mot_de_passe): ?Employe
    {
        $employe = $this->createQueryBuilder('e')
            ->where('e.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();

        if ($employe && $employe->getStatut() === $mot_de_passe) {
            return $employe;
        }

        return null;
    }
}