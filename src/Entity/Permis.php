<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: "App\Repository\PermisRepository")]
class Permis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_permis", type: "integer")]
    private ?int $id_permis = null;

    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "permis")]
    #[ORM\JoinColumn(name: "id_service", referencedColumnName: "id_service", onDelete: "CASCADE")]
    private ?Service $id_service = null;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le numéro de permis est obligatoire")]
    #[Assert\Length(
        max: 10,
        min: 10,
        maxMessage: "Le numéro ne peut pas dépasser {{ limit }} caractères",
        minMessage: "Le numéro ne peut pas dépasser {{ limit }} caractères"
    )]
   /* #[Assert\Regex(
        pattern: "/^[A-Z]{2}[0-9]{8}$/",
        message: "Le numéro de permis doit contenir 2 lettres majuscules suivies de 8 chiffres"
    )]*/
    private string $numero_permis;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "La catégorie est obligatoire")]
    #[Assert\Choice(
        choices: ["A", "B", "C", "D", "E"],
        message: "Choisissez une catégorie valide"
    )]
    private string $categorie;

    #[ORM\Column(type: "date")]
    #[Assert\NotBlank(message: "La date de délivrance est obligatoire")]
    #[Assert\LessThanOrEqual(
        "today",
        message: "La date doit être aujourd'hui ou dans le passé"
    )]
    private ?\DateTimeInterface $date_delivrance = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date_expiration = null;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\Choice(
        choices: ["Active", "Suspended", "Expired"],
        message: "Statut invalide"
    )]
    private string $etat = "Active";

    #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "permis")]
    #[ORM\JoinColumn(name: "id_employe", referencedColumnName: "id_employe", onDelete: "CASCADE")]
    private ?Employe $id_employe = null;

    #[ORM\OneToMany(mappedBy: "id_permis", targetEntity: Reservation::class)]
    private Collection $reservations;

  /*  #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Quiz $idQuiz = null;*/

    #[ORM\OneToOne(targetEntity: Quiz::class, inversedBy: "permis", cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: "idQuiz", referencedColumnName: "id")]
    private ?Quiz $idQuiz = null;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    // Getters and Setters

    public function getIdPermis(): ?int
    {
        return $this->id_permis;
    }

    public function getNumeroPermis(): ?string
    {
        return $this->numero_permis;
    }

    public function setNumeroPermis(string $numero_permis): self
    {
        $this->numero_permis = $numero_permis;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getDateDelivrance(): ?\DateTimeInterface
    {
        return $this->date_delivrance;
    }

    public function setDateDelivrance(\DateTimeInterface $date_delivrance): self
    {
        $this->date_delivrance = $date_delivrance;
        // Auto-set expiration date (+10 years)
        $this->date_expiration = (clone $date_delivrance)->modify('+10 years');
        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->date_expiration;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->id_service;
    }

    public function setIdService(?Service $id_service): self
    {
        $this->id_service = $id_service;
        return $this;
    }

    public function getIdEmploye(): ?Employe
    {
        return $this->id_employe;
    }

    public function setIdEmploye(?Employe $id_employe): self
    {
        $this->id_employe = $id_employe;
        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setIdPermis($this);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getIdPermis() === $this) {
                $reservation->setIdPermis(null);
            }
        }
        return $this;
    }

    public function getIdQuiz(): ?Quiz
    {
        return $this->idQuiz;
    }

    public function setIdQuiz(?Quiz $idQuiz): self
    {
        $this->idQuiz = $idQuiz;

        return $this;
    }


}