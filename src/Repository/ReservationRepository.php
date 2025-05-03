<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function countTotalReservations(): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
           
            ->getQuery()
            ->getSingleScalarResult();
    }

    
    public function countActiveReservations(): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.dateReservation <= CURRENT_DATE()')
            ->andWhere('r.heureReservation <= CURRENT_TIME()')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findUpcomingReservations( ): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.dateReservation > CURRENT_DATE()')
            ->orWhere('r.dateReservation = CURRENT_DATE() AND r.heureReservation > CURRENT_TIME()')
            ->orderBy('r.dateReservation', 'ASC')
            ->addOrderBy('r.heureReservation', 'ASC')
            ->getQuery()
            ->getResult();
    }

    
}
