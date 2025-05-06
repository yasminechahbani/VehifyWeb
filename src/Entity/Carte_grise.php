<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Vehicule;

#[ORM\Entity]
class Carte_grise
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_carte_grise;

    #[ORM\Column(type: "string", length: 50)]
    private string $numero_carte_grise;

    #[ORM\Column(type: "string", length: 100)]
    private string $proprietaire;

    #[ORM\Column(type: "string", length: 255)]
    private string $adresse_proprietaire;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_emission;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_expiration;

    #[ORM\Column(type: "integer")]
    private int $id_user;

    public function getId_carte_grise()
    {
        return $this->id_carte_grise;
    }

    public function setId_carte_grise($value)
    {
        $this->id_carte_grise = $value;
    }

    public function getNumero_carte_grise()
    {
        return $this->numero_carte_grise;
    }

    public function setNumero_carte_grise($value)
    {
        $this->numero_carte_grise = $value;
    }

    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    public function setProprietaire($value)
    {
        $this->proprietaire = $value;
    }

    public function getAdresse_proprietaire()
    {
        return $this->adresse_proprietaire;
    }

    public function setAdresse_proprietaire($value)
    {
        $this->adresse_proprietaire = $value;
    }

    public function getDate_emission()
    {
        return $this->date_emission;
    }

    public function setDate_emission($value)
    {
        $this->date_emission = $value;
    }

    public function getDate_expiration()
    {
        return $this->date_expiration;
    }

    public function setDate_expiration($value)
    {
        $this->date_expiration = $value;
    }

    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($value)
    {
        $this->id_user = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_carte_grise", targetEntity: Vehicule::class)]
    private Collection $vehicules;

        public function getVehicules(): Collection
        {
            return $this->vehicules;
        }
    
        public function addVehicule(Vehicule $vehicule): self
        {
            if (!$this->vehicules->contains($vehicule)) {
                $this->vehicules[] = $vehicule;
                $vehicule->setId_carte_grise($this);
            }
    
            return $this;
        }
    
        public function removeVehicule(Vehicule $vehicule): self
        {
            if ($this->vehicules->removeElement($vehicule)) {
                // set the owning side to null (unless already changed)
                if ($vehicule->getId_carte_grise() === $this) {
                    $vehicule->setId_carte_grise(null);
                }
            }
    
            return $this;
        }
}
