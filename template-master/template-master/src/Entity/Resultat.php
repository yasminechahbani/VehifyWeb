<?php

namespace App\Entity;

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
    private bool $freinage;

    #[ORM\Column(type: "boolean")]
    private bool $eclairage;

    #[ORM\Column(type: "boolean")]
    private bool $emission_gaz;

    #[ORM\Column(type: "boolean")]
    private bool $suspension;

    #[ORM\Column(type: "boolean")]
    private bool $direction;

    #[ORM\Column(type: "boolean")]
    private bool $chassis;

    #[ORM\Column(type: "boolean")]
    private bool $pneu_matique;

    #[ORM\Column(type: "boolean")]
    private bool $equipements_securite;

    #[ORM\Column(type: "boolean")]
    private bool $decision;

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

    public function getFreinage()
    {
        return $this->freinage;
    }

    public function setFreinage($value)
    {
        $this->freinage = $value;
    }

    public function getEclairage()
    {
        return $this->eclairage;
    }

    public function setEclairage($value)
    {
        $this->eclairage = $value;
    }

    public function getEmission_gaz()
    {
        return $this->emission_gaz;
    }

    public function setEmission_gaz($value)
    {
        $this->emission_gaz = $value;
    }

    public function getSuspension()
    {
        return $this->suspension;
    }

    public function setSuspension($value)
    {
        $this->suspension = $value;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setDirection($value)
    {
        $this->direction = $value;
    }

    public function getChassis()
    {
        return $this->chassis;
    }

    public function setChassis($value)
    {
        $this->chassis = $value;
    }

    public function getPneu_matique()
    {
        return $this->pneu_matique;
    }

    public function setPneu_matique($value)
    {
        $this->pneu_matique = $value;
    }

    public function getEquipements_securite()
    {
        return $this->equipements_securite;
    }

    public function setEquipements_securite($value)
    {
        $this->equipements_securite = $value;
    }

    public function getDecision()
    {
        return $this->decision;
    }

    public function setDecision($value)
    {
        $this->decision = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_resultat", targetEntity: Rapport::class)]
    private Collection $rapports;
}
