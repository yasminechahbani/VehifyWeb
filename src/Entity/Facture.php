<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 50, unique: true)]
    #[Assert\NotBlank(message: "Le numéro de facture est obligatoire.")]
    private ?string $numeroFacture = null;

    #[ORM\Column(type: "datetime")]
    #[Assert\NotBlank(message: "La date de facturation est obligatoire.")]
    #[Assert\Type(\DateTimeInterface::class, message: "La date de facturation doit être une date valide.")]
    private ?\DateTimeInterface $dateFacturation = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le montant est obligatoire.")]
    #[Assert\Positive(message: "Le montant doit être positif.")]
    private ?float $montant = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(choices: ["Payée", "En attente", "Annulée"], message: "Le statut doit être 'Payée', 'En attente' ou 'Annulée'.")]
    private ?string $statut = "Payée";

    #[ORM\OneToOne(inversedBy: "facture")]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le paiement est obligatoire.")]
    private ?Paiement $paiement = null;

    #[ORM\ManyToOne(inversedBy: "factures")]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "La réservation est obligatoire.")]
    private ?Reservation $reservation = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $stripeChargeId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroFacture(): ?string
    {
        return $this->numeroFacture;
    }

    public function setNumeroFacture(string $numeroFacture): self
    {
        $this->numeroFacture = $numeroFacture;
        return $this;
    }

    public function getDateFacturation(): ?\DateTimeInterface
    {
        return $this->dateFacturation;
    }

    public function setDateFacturation(\DateTimeInterface $dateFacturation): self
    {
        $this->dateFacturation = $dateFacturation;
        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }

    public function setPaiement(?Paiement $paiement): self
    {
        $this->paiement = $paiement;
        return $this;
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

    public function getStripeChargeId(): ?string
    {
        return $this->stripeChargeId;
    }

    public function setStripeChargeId(?string $stripeChargeId): self
    {
        $this->stripeChargeId = $stripeChargeId;
        return $this;
    }
}