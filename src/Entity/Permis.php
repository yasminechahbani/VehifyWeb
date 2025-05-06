<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Service;

#[ORM\Entity]
class Permis
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_permis;

        #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "permiss")]
    #[ORM\JoinColumn(name: 'id_employe', referencedColumnName: 'id_employe', onDelete: 'CASCADE')]
    private Employe $id_employe;

        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "permiss")]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $id_service;

    #[ORM\Column(type: "string", length: 50)]
    private string $numero_permis;

    #[ORM\Column(type: "string", length: 20)]
    private string $categorie;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_delivrance;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_expiration;

    #[ORM\Column(type: "string", length: 20)]
    private string $etat;

    public function getId_permis()
    {
        return $this->id_permis;
    }

    public function setId_permis($value)
    {
        $this->id_permis = $value;
    }

    public function getId_employe()
    {
        return $this->id_employe;
    }

    public function setId_employe($value)
    {
        $this->id_employe = $value;
    }

    public function getId_service()
    {
        return $this->id_service;
    }

    public function setId_service($value)
    {
        $this->id_service = $value;
    }

    public function getNumero_permis()
    {
        return $this->numero_permis;
    }

    public function setNumero_permis($value)
    {
        $this->numero_permis = $value;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($value)
    {
        $this->categorie = $value;
    }

    public function getDate_delivrance()
    {
        return $this->date_delivrance;
    }

    public function setDate_delivrance($value)
    {
        $this->date_delivrance = $value;
    }

    public function getDate_expiration()
    {
        return $this->date_expiration;
    }

    public function setDate_expiration($value)
    {
        $this->date_expiration = $value;
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
