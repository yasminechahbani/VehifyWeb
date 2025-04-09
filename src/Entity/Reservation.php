<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Facture;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\OneToMany(mappedBy: 'reservation', targetEntity: Paiement::class, orphanRemoval: true)]
    private Collection $paiements;
    
    #[ORM\OneToMany(mappedBy: 'reservation', targetEntity: Facture::class, orphanRemoval: true)]
    private Collection $factures;
    
    public function __construct()
    {
        $this->paiements = new ArrayCollection();
        $this->factures = new ArrayCollection();
    }

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de réservation est obligatoire.")]
    #[Assert\Type(\DateTimeInterface::class, message: "La date de réservation doit être une date valide.")]
    #[Assert\GreaterThan("today", message: "La date de réservation doit une date future.")]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'heure de réservation est obligatoire.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "L'heure de réservation ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $heureReservation = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[Assert\NotNull(message: "L'utilisateur est obligatoire.")]
    private ?User $userId = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'service_id', referencedColumnName: 'id_service', nullable: false)]
    #[Assert\NotNull(message: "Le service est obligatoire.")]
    private ?Service $serviceId = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'vehicule_id', referencedColumnName: 'id_vehicule', nullable: false)]
    #[Assert\NotNull(message: "Le véhicule est obligatoire.")]
    private ?Vehicule $vehiculeId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getHeureReservation(): ?string
    {
        return $this->heureReservation;
    }

    public function setHeureReservation(string $heureReservation): static
    {
        $this->heureReservation = $heureReservation;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getServiceId(): ?Service
    {
        return $this->serviceId;
    }

    public function setServiceId(?Service $serviceId): static
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    public function getVehiculeId(): ?Vehicule
    {
        return $this->vehiculeId;
    }
    
    /**
     * @return Collection<int, Facture>
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures->add($facture);
            $facture->setReservation($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getReservation() === $this) {
                $facture->setReservation(null);
            }
        }

        return $this;
    }

    public function setVehiculeId(?Vehicule $vehiculeId): static
    {
        $this->vehiculeId = $vehiculeId;

        return $this;
    }
    
    /**
     * @return Collection<int, Paiement>
     */
    public function getPaiements(): Collection
    {
        return $this->paiements;
    }

    public function addPaiement(Paiement $paiement): self
    {
        if (!$this->paiements->contains($paiement)) {
            $this->paiements->add($paiement);
            $paiement->setReservation($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): self
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getReservation() === $this) {
                $paiement->setReservation(null);
            }
        }

        return $this;
    }
}
