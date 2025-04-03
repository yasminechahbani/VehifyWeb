<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Service;
use Doctrine\Common\Collections\Collection;
use App\Entity\Permis;

#[ORM\Entity]
class Employe
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_employe;

        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "employes")]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $id_service;

    #[ORM\Column(type: "string", length: 50)]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    private string $prenom;

    #[ORM\Column(type: "string", length: 100)]
    private string $email;

    #[ORM\Column(type: "integer")]
    private int $age;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_embauche;

    #[ORM\Column(type: "string", length: 50)]
    private string $poste;

    #[ORM\Column(type: "string", length: 20)]
    private string $tel;

    #[ORM\Column(type: "float")]
    private float $salaire;

    #[ORM\Column(type: "string", length: 20)]
    private string $statut;

    #[ORM\Column(type: "string", length: 255)]
    private string $role;

    public function getId_employe()
    {
        return $this->id_employe;
    }

    public function setId_employe($value)
    {
        $this->id_employe = $value;
    }

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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($value)
    {
        $this->prenom = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($value)
    {
        $this->age = $value;
    }

    public function getDate_embauche()
    {
        return $this->date_embauche;
    }

    public function setDate_embauche($value)
    {
        $this->date_embauche = $value;
    }

    public function getPoste()
    {
        return $this->poste;
    }

    public function setPoste($value)
    {
        $this->poste = $value;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($value)
    {
        $this->tel = $value;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($value)
    {
        $this->salaire = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($value)
    {
        $this->role = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_employe", targetEntity: Equipement::class)]
    private Collection $equipements;

        public function getEquipements(): Collection
        {
            return $this->equipements;
        }
    
        public function addEquipement(Equipement $equipement): self
        {
            if (!$this->equipements->contains($equipement)) {
                $this->equipements[] = $equipement;
                $equipement->setId_employe($this);
            }
    
            return $this;
        }
    
        public function removeEquipement(Equipement $equipement): self
        {
            if ($this->equipements->removeElement($equipement)) {
                // set the owning side to null (unless already changed)
                if ($equipement->getId_employe() === $this) {
                    $equipement->setId_employe(null);
                }
            }
    
            return $this;
        }

    #[ORM\OneToMany(mappedBy: "id_employe", targetEntity: Permis::class)]
    private Collection $permiss;
}
