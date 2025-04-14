<?php

namespace App\Repository;

use App\Entity\Facture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Facture>
 *
 * @method Facture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facture[]    findAll()
 * @method Facture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Facture::class);
    }

    /**
     * Trouve les factures par réservation
     */
    public function findByReservation($reservation)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.reservation = :reservation')
            ->setParameter('reservation', $reservation)
            ->orderBy('f.dateFacturation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Trouve les factures par paiement
     */
    public function findByPaiement($paiement)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.paiement = :paiement')
            ->setParameter('paiement', $paiement)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
     * Trouve les factures par statut
     */
    public function findByStatut($statut)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.statut = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('f.dateFacturation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
}