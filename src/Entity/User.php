<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 50)]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    private string $prenom;

    #[ORM\Column(type: "string", length: 20)]
    private string $tel;

    #[ORM\Column(type: "string", length: 100)]
    private string $localisation;

    #[ORM\Column(type: "string", length: 150)]
    private string $email;

    #[ORM\Column(type: "string", length: 150)]
    private string $motDePasse;

    #[ORM\Column(type: "string", length: 50)]
    private string $status;

    #[ORM\Column(type: "string", length: 50)]
    private string $role;

    #[ORM\Column(type: "string", length: 150)]
    private string $image;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: CarteGrise::class, cascade: ["persist", "remove"])]
    private Collection $cartesGrises;

    #[ORM\OneToMany(mappedBy: "user", targetEntity: Compte::class, cascade: ["persist", "remove"])]
    private Collection $comptes;

    public function __construct()
    {
        $this->cartesGrises = new ArrayCollection();
        $this->comptes = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getTel(): string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;
        return $this;
    }

    public function getLocalisation(): string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Collection<int, CarteGrise>
     */
    public function getCartesGrises(): Collection
    {
        return $this->cartesGrises;
    }

    public function addCarteGrise(CarteGrise $carteGrise): self
    {
        if (!$this->cartesGrises->contains($carteGrise)) {
            $this->cartesGrises->add($carteGrise);
            $carteGrise->setUser($this);
        }

        return $this;
    }

    public function removeCarteGrise(CarteGrise $carteGrise): self
    {
        if ($this->cartesGrises->removeElement($carteGrise)) {
            if ($carteGrise->getUser() === $this) {
                $carteGrise->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Compte>
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes->add($compte);
            $compte->setUser($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->comptes->removeElement($compte)) {
            if ($compte->getUser() === $this) {
                $compte->setUser(null);
            }
        }

        return $this;
    }
}
