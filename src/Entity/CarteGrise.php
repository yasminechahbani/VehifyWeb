<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\CarteGriseRepository;

#[ORM\Entity(repositoryClass: CarteGriseRepository::class)]
#[ORM\Table(name: 'carte_grise')]
class CarteGrise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_carte_grise = null;

    public function getId_carte_grise(): ?int
    {
        return $this->id_carte_grise;
    }

    public function setId_carte_grise(int $id_carte_grise): self
    {
        $this->id_carte_grise = $id_carte_grise;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $numero_carte_grise = null;

    public function getNumero_carte_grise(): ?string
    {
        return $this->numero_carte_grise;
    }

    public function setNumero_carte_grise(string $numero_carte_grise): self
    {
        $this->numero_carte_grise = $numero_carte_grise;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $proprietaire = null;

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): self
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $adresse_proprietaire = null;

    public function getAdresse_proprietaire(): ?string
    {
        return $this->adresse_proprietaire;
    }

    public function setAdresse_proprietaire(string $adresse_proprietaire): self
    {
        $this->adresse_proprietaire = $adresse_proprietaire;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $date_emission = null;

    public function getDate_emission(): ?\DateTimeInterface
    {
        return $this->date_emission;
    }

    public function setDate_emission(\DateTimeInterface $date_emission): self
    {
        $this->date_emission = $date_emission;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $date_expiration = null;

    public function getDate_expiration(): ?\DateTimeInterface
    {
        return $this->date_expiration;
    }

    public function setDate_expiration(\DateTimeInterface $date_expiration): self
    {
        $this->date_expiration = $date_expiration;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id_user = null;

    public function getId_user(): ?int
    {
        return $this->id_user;
    }

    public function setId_user(int $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Vehicule::class, mappedBy: 'carteGrise')]
    private Collection $vehicules;

    /**
     * @return Collection<int, Vehicule>
     */
    public function getVehicules(): Collection
    {
        if (!$this->vehicules instanceof Collection) {
            $this->vehicules = new ArrayCollection();
        }
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->getVehicules()->contains($vehicule)) {
            $this->getVehicules()->add($vehicule);
        }
        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): self
    {
        $this->getVehicules()->removeElement($vehicule);
        return $this;
    }

}
