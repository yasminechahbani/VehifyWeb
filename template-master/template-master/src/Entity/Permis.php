<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Employe;
use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;

#[ORM\Entity]
class Permis
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id_permis;

        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "permiss")]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $id_service;

    #[ORM\Column(type: "string", length: 50)]
    private string $numero_permis;

    #[ORM\Column(type: "string", length: 20)]
    private string $categorie;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_delivrance;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_expiration;

    #[ORM\Column(type: "string", length: 20)]
    private string $etat;

        #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "permiss")]
    #[ORM\JoinColumn(name: 'id_employe', referencedColumnName: 'id_employe', onDelete: 'CASCADE')]
    private Employe $id_employe;

    public function getIdPermis(): int
    {
        return $this->id_permis;
    }

    public function setIdPermis(int $id_permis): self
    {
        $this->id_permis = $id_permis;
        return $this;
    }

    public function getIdService()
    {
        return $this->id_service;
    }

    public function setId_service($value)
    {
        $this->id_service = $value;
    }

    public function getNumeroPermis()
    {
        return $this->numero_permis;
    }

    public function setNumeroPermis($value)
    {
        $this->numero_permis = $value;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($value)
    {
        $this->categorie = $value;
    }

    public function getDateDelivrance()
    {
        return $this->date_delivrance;
    }

    public function setDateDelivrance($value)
    {
        $this->date_delivrance = $value;
    }

    public function getDateExpiration()
    {
        return $this->date_expiration;
    }

    public function setDateExpiration($value)
    {
        $this->date_expiration = $value;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($value)
    {
        $this->etat = $value;
    }

    public function getIdEmploye()
    {
        return $this->id_employe;
    }

    public function setIdEmploye($value)
    {
        $this->id_employe = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_permis", targetEntity: Reservation::class)]
    private Collection $reservations;

        public function getReservations(): Collection
        {
            return $this->reservations;
        }

        public function addReservation(Reservation $reservation): self
        {
            if (!$this->reservations->contains($reservation)) {
                $this->reservations[] = $reservation;
                $reservation->setId_permis($this);
            }

            return $this;
        }

        public function removeReservation(Reservation $reservation): self
        {
            if ($this->reservations->removeElement($reservation)) {
                // set the owning side to null (unless already changed)
                if ($reservation->getId_permis() === $this) {
                    $reservation->setId_permis(null);
                }
            }

            return $this;
        }
}
