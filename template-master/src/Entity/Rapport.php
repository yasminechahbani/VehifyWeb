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

    #[ORM\Column(type: "string", length: 50)]
    private string $num_rapport;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_visite;

    #[ORM\Column(type: "string", length: 100)]
    private string $centre_de_controle;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom_controleur;

    #[ORM\Column(type: "string", length: 20)]
    private string $status;

    #[ORM\Column(type: "string", length: 20)]
    private string $immatriculation;

    #[ORM\Column(type: "string", length: 50)]
    private string $marque;

    #[ORM\Column(type: "string", length: 50)]
    private string $modele;

    #[ORM\Column(type: "integer")]
    private int $annee_mise_en_circulation;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_expiration;

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

    public function getNum_rapport()
    {
        return $this->num_rapport;
    }

    public function setNum_rapport($value)
    {
        $this->num_rapport = $value;
    }

    public function getDate_visite()
    {
        return $this->date_visite;
    }

    public function setDate_visite($value)
    {
        $this->date_visite = $value;
    }

    public function getCentre_de_controle()
    {
        return $this->centre_de_controle;
    }

    public function setCentre_de_controle($value)
    {
        $this->centre_de_controle = $value;
    }

    public function getNom_controleur()
    {
        return $this->nom_controleur;
    }

    public function setNom_controleur($value)
    {
        $this->nom_controleur = $value;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function setImmatriculation($value)
    {
        $this->immatriculation = $value;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($value)
    {
        $this->marque = $value;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($value)
    {
        $this->modele = $value;
    }

    public function getAnnee_mise_en_circulation()
    {
        return $this->annee_mise_en_circulation;
    }

    public function setAnnee_mise_en_circulation($value)
    {
        $this->annee_mise_en_circulation = $value;
    }

    public function getDate_expiration()
    {
        return $this->date_expiration;
    }

    public function setDate_expiration($value)
    {
        $this->date_expiration = $value;
    }
}
