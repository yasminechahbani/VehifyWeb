<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Employe;

#[ORM\Entity]
class Equipement
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_equipement;

        #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "equipements")]
    #[ORM\JoinColumn(name: 'id_employe', referencedColumnName: 'id_employe', onDelete: 'CASCADE')]
    private Employe $id_employe;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom;

    #[ORM\Column(type: "text")]
    private string $description;

    #[ORM\Column(type: "string", length: 50)]
    private string $categorie;

    #[ORM\Column(type: "string", length: 20)]
    private string $etat;

    public function getId_equipement()
    {
        return $this->id_equipement;
    }

    public function setId_equipement($value)
    {
        $this->id_equipement = $value;
    }

    public function getId_employe()
    {
        return $this->id_employe;
    }

    public function setId_employe($value)
    {
        $this->id_employe = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($value)
    {
        $this->categorie = $value;
    }

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($value)
    {
        $this->etat = $value;
    }
}
