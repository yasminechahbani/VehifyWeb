<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Carte_grise;
use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;

#[ORM\Entity]
class Vehicule
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_vehicule;

        #[ORM\ManyToOne(targetEntity: Carte_grise::class, inversedBy: "vehicules")]
    #[ORM\JoinColumn(name: 'id_carte_grise', referencedColumnName: 'id_carte_grise', onDelete: 'CASCADE')]
    private Carte_grise $id_carte_grise;

    #[ORM\Column(type: "string", length: 50)]
    private string $marque;

    #[ORM\Column(type: "string", length: 50)]
    private string $modele;

    #[ORM\Column(type: "string", length: 20)]
    private string $immatriculation;

    #[ORM\Column(type: "string", length: 50)]
    private string $type;

    #[ORM\Column(type: "string", length: 30)]
    private string $couleur;

    #[ORM\Column(type: "integer")]
    private int $kilometrage;

    #[ORM\Column(type: "string", length: 100)]
    private string $statut;

    public function getId_vehicule()
    {
        return $this->id_vehicule;
    }

    public function setId_vehicule($value)
    {
        $this->id_vehicule = $value;
    }

    public function getId_carte_grise()
    {
        return $this->id_carte_grise;
    }

    public function setId_carte_grise($value)
    {
        $this->id_carte_grise = $value;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($value)
    {
        $this->marque = $value;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($value)
    {
        $this->modele = $value;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function setImmatriculation($value)
    {
        $this->immatriculation = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($value)
    {
        $this->couleur = $value;
    }

    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    public function setKilometrage($value)
    {
        $this->kilometrage = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    #[ORM\OneToMany(mappedBy: "idVehicule", targetEntity: Reservation::class)]
    private Collection $reservations;

        public function getReservations(): Collection
        {
            return $this->reservations;
        }
    
        public function addReservation(Reservation $reservation): self
        {
            if (!$this->reservations->contains($reservation)) {
                $this->reservations[] = $reservation;
                $reservation->setIdVehicule($this);
            }
    
            return $this;
        }
    
        public function removeReservation(Reservation $reservation): self
        {
            if ($this->reservations->removeElement($reservation)) {
                // set the owning side to null (unless already changed)
                if ($reservation->getIdVehicule() === $this) {
                    $reservation->setIdVehicule(null);
                }
            }
    
            return $this;
        }
}
