<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\EmployeRepository;

#[ORM\Entity(repositoryClass: EmployeRepository::class)]
#[ORM\Table(name: 'employe')]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_employe = null;

    public function getId_employe(): ?int
    {
        return $this->id_employe;
    }

    public function setId_employe(int $id_employe): self
    {
        $this->id_employe = $id_employe;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $prenom = null;

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $age = null;

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $date_embauche = null;

    public function getDate_embauche(): ?\DateTimeInterface
    {
        return $this->date_embauche;
    }

    public function setDate_embauche(\DateTimeInterface $date_embauche): self
    {
        $this->date_embauche = $date_embauche;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $poste = null;

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $tel = null;

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $salaire = null;

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: 'employes')]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service')]
    private ?Service $service = null;

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $role = null;

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Equipement::class, mappedBy: 'employe')]
    private Collection $equipements;

    /**
     * @return Collection<int, Equipement>
     */
    public function getEquipements(): Collection
    {
        if (!$this->equipements instanceof Collection) {
            $this->equipements = new ArrayCollection();
        }
        return $this->equipements;
    }

    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->getEquipements()->contains($equipement)) {
            $this->getEquipements()->add($equipement);
        }
        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        $this->getEquipements()->removeElement($equipement);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Permi::class, mappedBy: 'employe')]
    private Collection $permis;

    /**
     * @return Collection<int, Permi>
     */
    public function getPermis(): Collection
    {
        if (!$this->permis instanceof Collection) {
            $this->permis = new ArrayCollection();
        }
        return $this->permis;
    }

    public function addPermi(Permi $permi): self
    {
        if (!$this->getPermis()->contains($permi)) {
            $this->getPermis()->add($permi);
        }
        return $this;
    }

    public function removePermi(Permi $permi): self
    {
        $this->getPermis()->removeElement($permi);
        return $this;
    }

}
