<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\RapportRepository;

#[ORM\Entity(repositoryClass: RapportRepository::class)]
#[ORM\Table(name: 'rapport')]
class Rapport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_rapport = null;

    public function getId_rapport(): ?int
    {
        return $this->id_rapport;
    }

    public function setId_rapport(int $id_rapport): self
    {
        $this->id_rapport = $id_rapport;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Resultat::class, inversedBy: 'rapports')]
    #[ORM\JoinColumn(name: 'id_resultat', referencedColumnName: 'id_resultat')]
    private ?Resultat $resultat = null;

    public function getResultat(): ?Resultat
    {
        return $this->resultat;
    }

    public function setResultat(?Resultat $resultat): self
    {
        $this->resultat = $resultat;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $direction = null;

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $visibilite = null;

    public function getVisibilite(): ?string
    {
        return $this->visibilite;
    }

    public function setVisibilite(?string $visibilite): self
    {
        $this->visibilite = $visibilite;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $huileDefault = null;

    public function getHuileDefault(): ?string
    {
        return $this->huileDefault;
    }

    public function setHuileDefault(?string $huileDefault): self
    {
        $this->huileDefault = $huileDefault;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $pneaumatique = null;

    public function getPneaumatique(): ?string
    {
        return $this->pneaumatique;
    }

    public function setPneaumatique(?string $pneaumatique): self
    {
        $this->pneaumatique = $pneaumatique;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $echappement = null;

    public function getEchappement(): ?string
    {
        return $this->echappement;
    }

    public function setEchappement(?string $echappement): self
    {
        $this->echappement = $echappement;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $carrosorie = null;

    public function getCarrosorie(): ?string
    {
        return $this->carrosorie;
    }

    public function setCarrosorie(?string $carrosorie): self
    {
        $this->carrosorie = $carrosorie;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $eclairage = null;

    public function getEclairage(): ?string
    {
        return $this->eclairage;
    }

    public function setEclairage(?string $eclairage): self
    {
        $this->eclairage = $eclairage;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $freinage = null;

    public function getFreinage(): ?string
    {
        return $this->freinage;
    }

    public function setFreinage(?string $freinage): self
    {
        $this->freinage = $freinage;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

}
