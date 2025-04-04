<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column(length: 255)]
    private ?string $heureReservation = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $userId = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'service_id', referencedColumnName: 'id_service', nullable: false)]
    private ?Service $serviceId = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'vehicule_id', referencedColumnName: 'id_vehicule', nullable: false)]
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

    public function setVehiculeId(?Vehicule $vehiculeId): static
    {
        $this->vehiculeId = $vehiculeId;

        return $this;
    }
}
