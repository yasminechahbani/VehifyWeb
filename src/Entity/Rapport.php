<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Resultat;

#[ORM\Entity]
class Rapport
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_rapport;

        #[ORM\ManyToOne(targetEntity: Resultat::class, inversedBy: "rapports")]
    #[ORM\JoinColumn(name: 'id_resultat', referencedColumnName: 'id_resultat', onDelete: 'CASCADE')]
    private Resultat $id_resultat;

    #[ORM\Column(type: "string", length: 150)]
    private string $direction;

    #[ORM\Column(type: "string", length: 150)]
    private string $visibilite;

    #[ORM\Column(type: "string", length: 150)]
    private string $huileDefault;

    #[ORM\Column(type: "string", length: 150)]
    private string $pneaumatique;

    #[ORM\Column(type: "string", length: 150)]
    private string $echappement;

    #[ORM\Column(type: "string", length: 150)]
    private string $carrosorie;

    #[ORM\Column(type: "string", length: 150)]
    private string $eclairage;

    #[ORM\Column(type: "string", length: 150)]
    private string $freinage;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date;

    public function getId_rapport()
    {
        return $this->id_rapport;
    }

    public function setId_rapport($value)
    {
        $this->id_rapport = $value;
    }

    public function getId_resultat()
    {
        return $this->id_resultat;
    }

    public function setId_resultat($value)
    {
        $this->id_resultat = $value;
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

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($value)
    {
        $this->date = $value;
    }
}
