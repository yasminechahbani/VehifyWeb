<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class CarteGrise
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idCarteGrise = null;

    #[ORM\Column(type: "string", length: 50)]
    //#[Assert\NotBlank(message: "Le numéro de la carte grise est obligatoire")]
    #[Assert\Length(max: 50, maxMessage: "Ne doit pas dépasser {{ limit }} caractères")]
    private ?string $numeroCarteGrise = null;

    #[ORM\Column(type: "string", length: 100)]
   // #[Assert\NotBlank(message: "Le nom du propriétaire est obligatoire")]
    #[Assert\Length(max: 100, maxMessage: "Ne doit pas dépasser {{ limit }} caractères")]
    private ?string $proprietaire = null;

    #[ORM\Column(type: "string", length: 255)]
    //#[Assert\NotBlank(message: "L'adresse du propriétaire est obligatoire")]
    #[Assert\Length(max: 255, maxMessage: "Ne doit pas dépasser {{ limit }} caractères")]
    private ?string $adresseProprietaire = null;

    #[ORM\Column(type: "date")]
    #[Assert\NotNull(message: "La date d'émission est obligatoire")]
    private ?\DateTimeInterface $dateEmission = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $dateExpiration = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "cartesGrises")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id", onDelete: "CASCADE")]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: "carteGrise", targetEntity: Vehicule::class, cascade: ["persist", "remove"])]
    private Collection $vehicules;
    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

    // ---- Getters et Setters ----
    public function setIdCarteGrise(int $idCarteGrise): static
    {
        $this->idCarteGrise = $idCarteGrise;
        return $this;
    }
    public function getIdCarteGrise(): ?int
    {
        return $this->idCarteGrise;
    }

    public function getNumeroCarteGrise(): ?string
    {
        return $this->numeroCarteGrise;
    }

    public function setNumeroCarteGrise(string $numeroCarteGrise): static
    {
        $this->numeroCarteGrise = $numeroCarteGrise;
        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): static
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function getAdresseProprietaire(): ?string
    {
        return $this->adresseProprietaire;
    }

    public function setAdresseProprietaire(string $adresseProprietaire): static
    {
        $this->adresseProprietaire = $adresseProprietaire;
        return $this;
    }

    public function getDateEmission(): ?\DateTimeInterface
    {
        return $this->dateEmission;
    }

    public function setDateEmission(?\DateTimeInterface $dateEmission): self
    {
        $this->dateEmission = $dateEmission;
        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?\DateTimeInterface $dateExpiration): static
    {
        $this->dateExpiration = $dateExpiration;
        return $this;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    // ---- Gestion des véhicules ----

    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): static
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules->add($vehicule);
            $vehicule->setCarteGrise($this);
        }
        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): static
    {
        if ($this->vehicules->removeElement($vehicule)) {
            if ($vehicule->getCarteGrise() === $this) {
                $vehicule->setCarteGrise(null);
            }
        }
        return $this;
    }
}