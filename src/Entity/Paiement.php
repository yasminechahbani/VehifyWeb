<?php

namespace App\Entity;

use App\Entity\Reservation;
use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: "paiements")]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La réservation est obligatoire.")]
    private ?Reservation $reservation = null;

    #[ORM\Column(type: "string", length: 255, name: "numero_carte")]
    #[Assert\NotBlank(message: "Le numéro de carte est obligatoire.")]
    #[Assert\Length(
        min: 16,
        max: 16,
        exactMessage: "Le numéro de carte doit contenir exactement {{ limit }} caractères."
    )]
    private ?string $numeroCarte = null;

    #[ORM\Column(type: "datetime")]
    #[Assert\NotBlank(message: "La date de paiement est obligatoire.")]
    #[Assert\Type(\DateTimeInterface::class, message: "La date de paiement doit être une date valide.")]
    private ?\DateTimeInterface $datePaiement = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[Assert\Positive(message: "Le prix doit être positif.")]
    private ?float $prix = null;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(choices: ["En attente", "Confirmé", "Annulé"], message: "Le statut doit être 'En attente', 'Confirmé' ou 'Annulé'.")]
    private ?string $statut = null;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
    #[Assert\Length(
        min: 8,
        max: 20,
        minMessage: "Le numéro de téléphone doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $telephone = null;

    #[ORM\Column(type: "string", length: 10)]
    #[Assert\NotBlank(message: "La date d'expiration est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^(0[1-9]|1[0-2])\/[0-9]{2}$/",
        message: "La date d'expiration doit être au format MM/YY."
    )]
    private ?string $dateExpiration = null;

    #[ORM\Column(type: "string", length: 5)]
    #[Assert\NotBlank(message: "Le CVV est obligatoire.")]
    #[Assert\Length(
        min: 3,
        max: 4,
        minMessage: "Le CVV doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le CVV ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $cvv = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom du titulaire de la carte est obligatoire.")]
    #[Assert\Length(
        max: 100,
        maxMessage: "Le nom du titulaire de la carte ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nomTitulaireCarte = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;
        return $this;
    }

    public function getNumeroCarte(): ?string
    {
        return $this->numeroCarte;
    }

    public function setNumeroCarte(?string $numeroCarte): self
    {
        $this->numeroCarte = $numeroCarte;
        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(?\DateTimeInterface $datePaiement): self
    {
        $this->datePaiement = $datePaiement;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getDateExpiration(): ?string
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?string $dateExpiration): self
    {
        $this->dateExpiration = $dateExpiration;
        return $this;
    }

    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    public function setCvv(?string $cvv): self
    {
        $this->cvv = $cvv;
        return $this;
    }

    public function getNomTitulaireCarte(): ?string
    {
        return $this->nomTitulaireCarte;
    }

    public function setNomTitulaireCarte(?string $nomTitulaireCarte): self
    {
        $this->nomTitulaireCarte = $nomTitulaireCarte;
        return $this;
    }
}