<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\PermiRepository;

#[ORM\Entity(repositoryClass: PermiRepository::class)]
#[ORM\Table(name: 'permis')]
class Permi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_permis = null;

    public function getId_permis(): ?int
    {
        return $this->id_permis;
    }

    public function setId_permis(int $id_permis): self
    {
        $this->id_permis = $id_permis;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $numero_permis = null;

    public function getNumero_permis(): ?string
    {
        return $this->numero_permis;
    }

    public function setNumero_permis(string $numero_permis): self
    {
        $this->numero_permis = $numero_permis;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $categorie = null;

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $date_delivrance = null;

    public function getDate_delivrance(): ?\DateTimeInterface
    {
        return $this->date_delivrance;
    }

    public function setDate_delivrance(\DateTimeInterface $date_delivrance): self
    {
        $this->date_delivrance = $date_delivrance;
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $etat = null;

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: 'permis')]
    #[ORM\JoinColumn(name: 'id_employe', referencedColumnName: 'id_employe')]
    private ?Employe $employe = null;

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): self
    {
        $this->employe = $employe;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: 'permis')]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service')]
    private ?Service $service = null;

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;
        return $this;
    }

}
