<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Vehicule;
use Doctrine\Common\Collections\Collection;
use App\Entity\Paiement;

#[ORM\Entity]
class Reservation
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_reservation;

        #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private User $user_id;

        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'service_id', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $service_id;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_reservation;

    #[ORM\Column(type: "string", length: 255)]
    private string $heureReservation;

        #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'idVehicule', referencedColumnName: 'id_vehicule', onDelete: 'CASCADE')]
    private Vehicule $idVehicule;

    public function getId_reservation()
    {
        return $this->id_reservation;
    }

    public function setId_reservation($value)
    {
        $this->id_reservation = $value;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($value)
    {
        $this->user_id = $value;
    }

    public function getService_id()
    {
        return $this->service_id;
    }

    public function setService_id($value)
    {
        $this->service_id = $value;
    }

    public function getDate_reservation()
    {
        return $this->date_reservation;
    }

    public function setDate_reservation($value)
    {
        $this->date_reservation = $value;
    }

    public function getHeureReservation()
    {
        return $this->heureReservation;
    }

    public function setHeureReservation($value)
    {
        $this->heureReservation = $value;
    }

    public function getIdVehicule()
    {
        return $this->idVehicule;
    }

    public function setIdVehicule($value)
    {
        $this->idVehicule = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_reservation", targetEntity: Paiement::class)]
    private Collection $paiements;
}
