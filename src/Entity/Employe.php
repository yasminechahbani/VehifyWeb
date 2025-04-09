<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Service;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
//use App\Entity\Equipement;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Employe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_employe", type: "integer")]
    private ?int $idEmploye = null;

    public function getIdEmploye(): ?int
    {
        return $this->idEmploye;
    }

    public function setIdEmploye(int $idEmploye): self
    {
        $this->idEmploye = $idEmploye;
        return $this;
    }
    



    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "employes")]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private ?Service $id_service = null;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Regex(pattern: "/^[^\d]*$/", message: "Le nom ne doit pas contenir de chiffres.")]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    #[Assert\Regex(pattern: "/^[^\d]*$/", message: "Le prénom ne doit pas contenir de chiffres.")]
    private string $prenom;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'adresse email '{{ value }}' n'est pas valide.")]
    private string $email;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "L'âge est obligatoire.")]
    #[Assert\Range(min: 18, max: 60, notInRangeMessage: "L'âge doit être entre {{ min }} et {{ max }} ans.")]
    private int $age;

    #[ORM\Column(type: "date")]
    #[Assert\NotNull(message: "La date d'embauche est obligatoire.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "La date doit être valide.")]
    private ?\DateTimeInterface $dateEmbauche = null;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le poste est obligatoire.")]
    #[Assert\Regex(pattern: "/^[^\d]*$/", message: "Le poste ne doit pas contenir de chiffres.")]
    private string $poste;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
    #[Assert\Regex(pattern: "/^\+?[0-9]{8,15}$/", message: "Le numéro de téléphone est invalide.")]
    private string $tel;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le salaire est obligatoire.")]
    #[Assert\Positive(message: "Le salaire doit être un nombre positif.")]
    private float $salaire;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Regex(pattern: "/^[^\d]*$/", message: "Le statut ne doit pas contenir de chiffres.")]
    private string $statut;

    #[ORM\OneToMany(mappedBy: "employe", targetEntity: Equipement::class)]
    private Collection $equipements;

    public function __construct()
    {
        $this->equipements = new ArrayCollection();
    }

    

    public function getIdService(): ?Service
    {
        return $this->id_service;
    }

    public function setIdService(?Service $value): self
    {
        $this->id_service = $value;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $value): self
    {
        $this->nom = $value;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $value): self
    {
        $this->prenom = $value;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $value): self
    {
        $this->email = $value;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $value): self
    {
        $this->age = $value;
        return $this;
    }

    public function getDateEmbauche(): ?\DateTimeInterface
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(?\DateTimeInterface $value): self
    {
        $this->dateEmbauche = $value;
        return $this;
    }

    public function getPoste(): string
    {
        return $this->poste;
    }

    public function setPoste(string $value): self
    {
        $this->poste = $value;
        return $this;
    }

    public function getTel(): string
    {
        return $this->tel;
    }

    public function setTel(string $value): self
    {
        $this->tel = $value;
        return $this;
    }

    public function getSalaire(): float
    {
        return $this->salaire;
    }

    public function setSalaire(float $value): self
    {
        $this->salaire = $value;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $value): self
    {
        $this->statut = $value;
        return $this;
    }

    /**
     * @return Collection<int, Equipement>
     */
    public function getEquipements(): Collection
    {
        return $this->equipements;
    }

    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
            $equipement->setEmploye($this);
        }
        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        if ($this->equipements->removeElement($equipement)) {
            if ($equipement->getEmploye() === $this) {
                $equipement->setEmploye(null);
            }
        }
        return $this;
    }
}