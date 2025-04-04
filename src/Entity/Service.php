<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;

#[ORM\Entity]
class Service
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_service;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    private string $type;

    #[ORM\Column(type: "string", length: 255)]
    private string $heure_ouverture;

    #[ORM\Column(type: "string", length: 255)]
    private string $heure_fermeture;

    #[ORM\Column(type: "float")]
    private float $prix;

    #[ORM\Column(type: "string", length: 20)]
    private string $gouvernerat;

    #[ORM\Column(type: "integer")]
    private int $numero;

    #[ORM\Column(type: "string", length: 255)]
    private string $description;

    #[ORM\Column(type: "string", length: 255)]
    private string $email;

    #[ORM\Column(type: "float")]
    private float $latitude;

    #[ORM\Column(type: "float")]
    private float $longitude;

    public function getId_service()
    {
        return $this->id_service;
    }

    public function setId_service($value)
    {
        $this->id_service = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function getHeure_ouverture()
    {
        return $this->heure_ouverture;
    }

    public function setHeure_ouverture($value)
    {
        $this->heure_ouverture = $value;
    }

    public function getHeure_fermeture()
    {
        return $this->heure_fermeture;
    }

    public function setHeure_fermeture($value)
    {
        $this->heure_fermeture = $value;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($value)
    {
        $this->prix = $value;
    }

    public function getGouvernerat()
    {
        return $this->gouvernerat;
    }

    public function setGouvernerat($value)
    {
        $this->gouvernerat = $value;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($value)
    {
        $this->numero = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($value)
    {
        $this->latitude = $value;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($value)
    {
        $this->longitude = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_service", targetEntity: Employe::class)]
    private Collection $employes;

        public function getEmployes(): Collection
        {
            return $this->employes;
        }
    
        public function addEmploye(Employe $employe): self
        {
            if (!$this->employes->contains($employe)) {
                $this->employes[] = $employe;
                $employe->setId_service($this);
            }
    
            return $this;
        }
    
        public function removeEmploye(Employe $employe): self
        {
            if ($this->employes->removeElement($employe)) {
                // set the owning side to null (unless already changed)
                if ($employe->getId_service() === $this) {
                    $employe->setId_service(null);
                }
            }
    
            return $this;
        }

    #[ORM\OneToMany(mappedBy: "id_service", targetEntity: Resultat::class)]
    private Collection $resultats;

    #[ORM\OneToMany(mappedBy: "service_id", targetEntity: Reservation::class)]
    private Collection $reservations;

        public function getReservations(): Collection
        {
            return $this->reservations;
        }
    
        public function addReservation(Reservation $reservation): self
        {
            if (!$this->reservations->contains($reservation)) {
                $this->reservations[] = $reservation;
                $reservation->setService_id($this);
            }
    
            return $this;
        }
    
        public function removeReservation(Reservation $reservation): self
        {
            if ($this->reservations->removeElement($reservation)) {
                // set the owning side to null (unless already changed)
                if ($reservation->getService_id() === $this) {
                    $reservation->setService_id(null);
                }
            }
    
            return $this;
        }
}
