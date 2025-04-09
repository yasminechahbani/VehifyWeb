<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Permis;
use Doctrine\Common\Collections\Collection;
use App\Entity\Paiement;

#[ORM\Entity]
class Reservation
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_reservation;

        #[ORM\ManyToOne(targetEntity: Compte::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'id_compte', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Compte $id_compte;

        #[ORM\ManyToOne(targetEntity: Vehicule::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'id_vehicule', referencedColumnName: 'id_vehicule', onDelete: 'CASCADE')]
    private Vehicule $id_vehicule;

        #[ORM\ManyToOne(targetEntity: Permis::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'id_permis', referencedColumnName: 'id_permis', onDelete: 'CASCADE')]
    private Permis $id_permis;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_reservation;

    public function getId_reservation()
    {
        return $this->id_reservation;
    }

    public function setId_reservation($value)
    {
        $this->id_reservation = $value;
    }

    public function getId_compte()
    {
        return $this->id_compte;
    }

    public function setId_compte($value)
    {
        $this->id_compte = $value;
    }

    public function getId_vehicule()
    {
        return $this->id_vehicule;
    }

    public function setId_vehicule($value)
    {
        $this->id_vehicule = $value;
    }

    public function getId_permis()
    {
        return $this->id_permis;
    }

    public function setId_permis($value)
    {
        $this->id_permis = $value;
    }

    public function getDate_reservation()
    {
        return $this->date_reservation;
    }

    public function setDate_reservation($value)
    {
        $this->date_reservation = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_reservation", targetEntity: Paiement::class)]
    private Collection $paiements;
}
