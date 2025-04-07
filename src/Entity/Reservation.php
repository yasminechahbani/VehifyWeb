<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Service;
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

        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "reservations")]
    #[ORM\JoinColumn(name: 'serviceId', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $serviceId;

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

    public function getServiceId()
    {
        return $this->serviceId;
    }

    public function setServiceId($value)
    {
        $this->serviceId = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_reservation", targetEntity: Paiement::class)]
    private Collection $paiements;

    public function __construct()
    {
        $this->paiements = new ArrayCollection();
    }

    public function getIdReservation(): ?int
    {
        return $this->id_reservation;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): static
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getIdCompte(): ?Compte
    {
        return $this->id_compte;
    }

    public function setIdCompte(?Compte $id_compte): static
    {
        $this->id_compte = $id_compte;

        return $this;
    }

    public function getIdVehicule(): ?Vehicule
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(?Vehicule $id_vehicule): static
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }

    public function getIdPermis(): ?Permis
    {
        return $this->id_permis;
    }

    public function setIdPermis(?Permis $id_permis): static
    {
        $this->id_permis = $id_permis;

        return $this;
    }

    /**
     * @return Collection<int, Paiement>
     */
    public function getPaiements(): Collection
    {
        return $this->paiements;
    }

    public function addPaiement(Paiement $paiement): static
    {
        if (!$this->paiements->contains($paiement)) {
            $this->paiements->add($paiement);
            $paiement->setIdReservation($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): static
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getIdReservation() === $this) {
                $paiement->setIdReservation(null);
            }
        }

        return $this;
    }
}
