<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Paiement;
use Doctrine\Common\Collections\Collection;
use App\Entity\Rapport;

#[ORM\Entity]
class Resultat
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_resultat;

        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "resultats")]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $id_service;

        #[ORM\ManyToOne(targetEntity: Paiement::class, inversedBy: "resultats")]
    #[ORM\JoinColumn(name: 'id_paiement', referencedColumnName: 'id_paiement', onDelete: 'CASCADE')]
    private Paiement $id_paiement;

    #[ORM\Column(type: "boolean")]
    private bool $direction;

    #[ORM\Column(type: "boolean")]
    private bool $visibilite;

    #[ORM\Column(type: "boolean")]
    private bool $huileDefault;

    #[ORM\Column(type: "boolean")]
    private bool $pneaumatique;

    #[ORM\Column(type: "boolean")]
    private bool $echappement;

    #[ORM\Column(type: "boolean")]
    private bool $carrosorie;

    #[ORM\Column(type: "boolean")]
    private bool $eclairage;

    #[ORM\Column(type: "boolean")]
    private bool $freinage;

    #[ORM\Column(type: "string", length: 255)]
    private string $vinSaisie;

    #[ORM\Column(type: "boolean")]
    private bool $status;

    public function getId_resultat()
    {
        return $this->id_resultat;
    }

    public function setId_resultat($value)
    {
        $this->id_resultat = $value;
    }

    public function getId_service()
    {
        return $this->id_service;
    }

    public function setId_service($value)
    {
        $this->id_service = $value;
    }

    public function getId_paiement()
    {
        return $this->id_paiement;
    }

    public function setId_paiement($value)
    {
        $this->id_paiement = $value;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setDirection($value)
    {
        $this->direction = $value;
    }

    public function getVisibilite()
    {
        return $this->visibilite;
    }

    public function setVisibilite($value)
    {
        $this->visibilite = $value;
    }

    public function getHuileDefault()
    {
        return $this->huileDefault;
    }

    public function setHuileDefault($value)
    {
        $this->huileDefault = $value;
    }

    public function getPneaumatique()
    {
        return $this->pneaumatique;
    }

    public function setPneaumatique($value)
    {
        $this->pneaumatique = $value;
    }

    public function getEchappement()
    {
        return $this->echappement;
    }

    public function setEchappement($value)
    {
        $this->echappement = $value;
    }

    public function getCarrosorie()
    {
        return $this->carrosorie;
    }

    public function setCarrosorie($value)
    {
        $this->carrosorie = $value;
    }

    public function getEclairage()
    {
        return $this->eclairage;
    }

    public function setEclairage($value)
    {
        $this->eclairage = $value;
    }

    public function getFreinage()
    {
        return $this->freinage;
    }

    public function setFreinage($value)
    {
        $this->freinage = $value;
    }

    public function getVinSaisie()
    {
        return $this->vinSaisie;
    }

    public function setVinSaisie($value)
    {
        $this->vinSaisie = $value;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_resultat", targetEntity: Rapport::class)]
    private Collection $rapports;

    public function __construct()
    {
        $this->rapports = new ArrayCollection();
    }

    public function getIdResultat(): ?int
    {
        return $this->id_resultat;
    }

    public function isDirection(): ?bool
    {
        return $this->direction;
    }

    public function isVisibilite(): ?bool
    {
        return $this->visibilite;
    }

    public function isHuileDefault(): ?bool
    {
        return $this->huileDefault;
    }

    public function isPneaumatique(): ?bool
    {
        return $this->pneaumatique;
    }

    public function isEchappement(): ?bool
    {
        return $this->echappement;
    }

    public function isCarrosorie(): ?bool
    {
        return $this->carrosorie;
    }

    public function isEclairage(): ?bool
    {
        return $this->eclairage;
    }

    public function isFreinage(): ?bool
    {
        return $this->freinage;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function getIdService(): ?Service
    {
        return $this->id_service;
    }

    public function setIdService(?Service $id_service): static
    {
        $this->id_service = $id_service;

        return $this;
    }

    public function getIdPaiement(): ?Paiement
    {
        return $this->id_paiement;
    }

    public function setIdPaiement(?Paiement $id_paiement): static
    {
        $this->id_paiement = $id_paiement;

        return $this;
    }

    /**
     * @return Collection<int, Rapport>
     */
    public function getRapports(): Collection
    {
        return $this->rapports;
    }

    public function addRapport(Rapport $rapport): static
    {
        if (!$this->rapports->contains($rapport)) {
            $this->rapports->add($rapport);
            $rapport->setIdResultat($this);
        }

        return $this;
    }

    public function removeRapport(Rapport $rapport): static
    {
        if ($this->rapports->removeElement($rapport)) {
            // set the owning side to null (unless already changed)
            if ($rapport->getIdResultat() === $this) {
                $rapport->setIdResultat(null);
            }
        }

        return $this;
    }
}
