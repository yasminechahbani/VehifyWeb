<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ResultatRepository;

#[ORM\Entity(repositoryClass: ResultatRepository::class)]
#[ORM\Table(name: 'resultat')]
class Resultat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_resultat = null;

    public function getId_resultat(): ?int
    {
        return $this->id_resultat;
    }

    public function setId_resultat(int $id_resultat): self
    {
        $this->id_resultat = $id_resultat;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: 'resultats')]
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

    #[ORM\ManyToOne(targetEntity: Paiement::class, inversedBy: 'resultats')]
    #[ORM\JoinColumn(name: 'id_paiement', referencedColumnName: 'id_paiement')]
    private ?Paiement $paiement = null;

    public function getPaiement(): ?Paiement
    {
        return $this->paiement;
    }

    public function setPaiement(?Paiement $paiement): self
    {
        $this->paiement = $paiement;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $direction = null;

    public function isDirection(): ?bool
    {
        return $this->direction;
    }

    public function setDirection(bool $direction): self
    {
        $this->direction = $direction;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $visibilite = null;

    public function isVisibilite(): ?bool
    {
        return $this->visibilite;
    }

    public function setVisibilite(bool $visibilite): self
    {
        $this->visibilite = $visibilite;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $huileDefault = null;

    public function isHuileDefault(): ?bool
    {
        return $this->huileDefault;
    }

    public function setHuileDefault(bool $huileDefault): self
    {
        $this->huileDefault = $huileDefault;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $pneaumatique = null;

    public function isPneaumatique(): ?bool
    {
        return $this->pneaumatique;
    }

    public function setPneaumatique(bool $pneaumatique): self
    {
        $this->pneaumatique = $pneaumatique;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $echappement = null;

    public function isEchappement(): ?bool
    {
        return $this->echappement;
    }

    public function setEchappement(bool $echappement): self
    {
        $this->echappement = $echappement;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $carrosorie = null;

    public function isCarrosorie(): ?bool
    {
        return $this->carrosorie;
    }

    public function setCarrosorie(bool $carrosorie): self
    {
        $this->carrosorie = $carrosorie;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $eclairage = null;

    public function isEclairage(): ?bool
    {
        return $this->eclairage;
    }

    public function setEclairage(bool $eclairage): self
    {
        $this->eclairage = $eclairage;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $freinage = null;

    public function isFreinage(): ?bool
    {
        return $this->freinage;
    }

    public function setFreinage(bool $freinage): self
    {
        $this->freinage = $freinage;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $vinSaisie = null;

    public function getVinSaisie(): ?string
    {
        return $this->vinSaisie;
    }

    public function setVinSaisie(string $vinSaisie): self
    {
        $this->vinSaisie = $vinSaisie;
        return $this;
    }

    #[ORM\Column(type: 'boolean', nullable: true)]
    private ?bool $status = null;

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Rapport::class, mappedBy: 'resultat')]
    private Collection $rapports;

    /**
     * @return Collection<int, Rapport>
     */
    public function getRapports(): Collection
    {
        if (!$this->rapports instanceof Collection) {
            $this->rapports = new ArrayCollection();
        }
        return $this->rapports;
    }

    public function addRapport(Rapport $rapport): self
    {
        if (!$this->getRapports()->contains($rapport)) {
            $this->getRapports()->add($rapport);
        }
        return $this;
    }

    public function removeRapport(Rapport $rapport): self
    {
        $this->getRapports()->removeElement($rapport);
        return $this;
    }

}
