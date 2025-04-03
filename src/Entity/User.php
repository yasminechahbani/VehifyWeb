<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity]
class User
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le nom est requis.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le nom ne peut contenir que des lettres, espaces et tirets."
    )]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le prénom est requis.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Le prénom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le prénom ne peut contenir que des lettres, espaces et tirets."
    )]
    private string $prenom;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est requis.")]
    #[Assert\Regex(
        pattern: "/^[0-9\+\(\)\s\-]+$/",
        message: "Le numéro de téléphone n'est pas valide."
    )]
    #[Assert\Length(
        min: 8,
        max: 20,
        minMessage: "Le numéro de téléphone doit avoir au moins {{ limit }} chiffres.",
        maxMessage: "Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères."
    )]
    private string $tel;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "La localisation est requise.")]
    #[Assert\Length(
        max: 100,
        maxMessage: "La localisation ne peut pas dépasser {{ limit }} caractères."
    )]
    private string $localisation;

    #[ORM\Column(type: "string", length: 150)]
    #[Assert\NotBlank(message: "L'email est requis.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[Assert\Length(
        max: 150,
        maxMessage: "L'email ne peut pas dépasser {{ limit }} caractères."
    )]
    private string $email;

    #[ORM\Column(type: "string", length: 150)]
    #[Assert\NotBlank(message: "Le mot de passe est requis.")]
    #[Assert\Length(
        min: 8,
        max: 150,
        minMessage: "Le mot de passe doit avoir au moins {{ limit }} caractères.",
        maxMessage: "Le mot de passe ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/",
        message: "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial."
    )]
    private string $mot_de_passe;

    #[ORM\Column(type: "string", length: 50)]
    private string $status;

    #[ORM\Column(type: "string", length: 50)]
    private string $role;

    #[ORM\Column(type: "string", length: 150)]

    private string $image;


    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
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

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($value)
    {
        $this->tel = $value;
    }

    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setLocalisation($value)
    {
        $this->localisation = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;
        return $this;
    }

    // Getter et Setter pour la propriété status
    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
    public function getRole()
    {
        return $this->role;
    }

    public function setRole($value)
    {
        $this->role = $value;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($value)
    {
        $this->image = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_user", targetEntity: Compte::class)]
    private Collection $comptes;

        public function getComptes(): Collection
        {
            return $this->comptes;
        }

        public function addCompte(Compte $compte): self
        {
            if (!$this->comptes->contains($compte)) {
                $this->comptes[] = $compte;
                $compte->setId_user($this);
            }

            return $this;
        }

        public function removeCompte(Compte $compte): self
        {
            if ($this->comptes->removeElement($compte)) {
                // set the owning side to null (unless already changed)
                if ($compte->getId_user() === $this) {
                    $compte->setId_user(null);
                }
            }

            return $this;
        }

    #[ORM\OneToMany(mappedBy: "user_id", targetEntity: Reservation::class)]
    private Collection $reservations;

        public function getReservations(): Collection
        {
            return $this->reservations;
        }

        public function addReservation(Reservation $reservation): self
        {
            if (!$this->reservations->contains($reservation)) {
                $this->reservations[] = $reservation;
                $reservation->setUser_id($this);
            }

            return $this;
        }

        public function removeReservation(Reservation $reservation): self
        {
            if ($this->reservations->removeElement($reservation)) {
                // set the owning side to null (unless already changed)
                if ($reservation->getUser_id() === $this) {
                    $reservation->setUser_id(null);
                }
            }

            return $this;
        }
}
