<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Employe;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_contrat", type: "integer")]
    private ?int $idContrat = null;
        
    #[ORM\Column(name: "type_contrat", length: 255)]
    private ?string $typeContrat = null;

    #[ORM\Column(type: 'date')]
private ?\DateTimeInterface $dateDebut = null;


#[ORM\Column(type: 'date')]
private ?\DateTimeInterface $dateFin = null;


    #[ORM\Column(name: "salaire_contrat", type: "integer")]
    private ?int $salaireContrat = null;

    #[ORM\Column(name: "periodeEssai", length: 255)]
    private ?string $periodeEssai = null;

    #[ORM\Column(length: 255)]
    private ?string $confidentialite = null;

    #[ORM\Column(length: 255)]
    private ?string $preavis = null;

    #[ORM\Column(name: "statut_contrat", length: 255)]
    private ?string $statutContrat = null;

    #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "contrats")]
#[ORM\JoinColumn(name: "employe_id", referencedColumnName: "id_employe", nullable: false)]
private ?Employe $employe = null;

    // getters et setters (comme tu les as déjà)


    public function getIdContrat(): ?int
    {
        return $this->idContrat;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): static
    {
        $this->typeContrat = $typeContrat;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
{
    return $this->dateDebut;
}

public function setDateDebut(\DateTimeInterface $dateDebut): static
{
    $this->dateDebut = $dateDebut;
    return $this;
}

public function getDateFin(): ?\DateTimeInterface
{
    return $this->dateFin;
}

public function setDateFin(\DateTimeInterface $dateFin): static
{
    $this->dateFin = $dateFin;
    return $this;
}


    public function getSalaireContrat(): ?int
    {
        return $this->salaireContrat;
    }

    public function setSalaireContrat(int $salaireContrat): static
    {
        $this->salaireContrat = $salaireContrat;
        return $this;
    }

    public function getPeriodeEssai(): ?string
    {
        return $this->periodeEssai;
    }

    public function setPeriodeEssai(string $periodeEssai): static
    {
        $this->periodeEssai = $periodeEssai;
        return $this;
    }

    public function getConfidentialite(): ?string
    {
        return $this->confidentialite;
    }

    public function setConfidentialite(string $confidentialite): static
    {
        $this->confidentialite = $confidentialite;
        return $this;
    }

    public function getPreavis(): ?string
    {
        return $this->preavis;
    }

    public function setPreavis(string $preavis): static
    {
        $this->preavis = $preavis;
        return $this;
    }

    public function getStatutContrat(): ?string
    {
        return $this->statutContrat;
    }

    public function setStatutContrat(string $statutContrat): static
    {
        $this->statutContrat = $statutContrat;
        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): static
    {
        $this->employe = $employe;
        return $this;
    }
}
