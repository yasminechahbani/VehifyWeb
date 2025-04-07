<?php

namespace App\Entity;

use App\Repository\CarteGriseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarteGriseRepository::class)]
#[ORM\Table(name: 'carte_grise')]
class Carte_grise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_carte_grise = null;

    #[ORM\Column(length: 255)]
    private ?string $numero_carte_grise = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $proprietaire = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_proprietaire = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_emission = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_expiration = null;

    public function getIdCarteGrise(): ?int
    {
        return $this->id_carte_grise;
    }

    public function getNumeroCarteGrise(): ?string
    {
        return $this->numero_carte_grise;
    }

    public function setNumeroCarteGrise(string $numero_carte_grise): self
    {
        $this->numero_carte_grise = $numero_carte_grise;
        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): self
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function getAdresseProprietaire(): ?string
    {
        return $this->adresse_proprietaire;
    }

    public function setAdresseProprietaire(string $adresse_proprietaire): self
    {
        $this->adresse_proprietaire = $adresse_proprietaire;
        return $this;
    }

    public function getDateEmission(): ?\DateTimeInterface
    {
        return $this->date_emission;
    }

    public function setDateEmission(\DateTimeInterface $date_emission): self
    {
        $this->date_emission = $date_emission;
        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->date_expiration;
    }

    public function setDateExpiration(\DateTimeInterface $date_expiration): self
    {
        $this->date_expiration = $date_expiration;
        return $this;
    }
}
