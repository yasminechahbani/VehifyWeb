<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Resultat;

#[ORM\Entity]
class Service
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_service;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom;

    #[ORM\Column(type: "string", length: 255)]
    private string $localisation;

    #[ORM\Column(type: "string", length: 50)]
    private string $type;

    #[ORM\Column(type: "string")]
    private string $heure_ouverture;

    #[ORM\Column(type: "string")]
    private string $heure_fermeture;

    #[ORM\Column(type: "float")]
    private float $prix;

    public function getId(): int
    {
        return $this->id_service;
    }

    public function getIdService(): int
    {
        return $this->id_service;
    }

    public function setIdService(int $value): self
    {
        $this->id_service = $value;
        return $this;
    }


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setLocalisation($value)
    {
        $this->localisation = $value;
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

    #[ORM\OneToMany(mappedBy: "id_service", targetEntity: Permis::class)]
    private Collection $permiss;

    #[ORM\OneToMany(mappedBy: "id_service", targetEntity: Resultat::class)]
    private Collection $resultats;
}
