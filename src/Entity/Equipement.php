<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Employe;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idEquipement = null;

   #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "equipements")]
#[ORM\JoinColumn(name: "id_employe", referencedColumnName: "id_employe", onDelete: "CASCADE")]
private ?Employe $employe = null;


    

    
    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom de l'équipement est obligatoire.")]
    private string $nom;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    private string $description;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "La catégorie est obligatoire.")]
    private string $categorie;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "L'état est obligatoire.")]
    private string $etat;

    public function getIdEquipement(): ?int
    {
        return $this->idEquipement;
    }

    public function setIdEquipement(int $value): self
    {
        $this->idEquipement = $value;
        return $this;
    }

    public function getEmploye(): ?Employe
    {
        return $this->employe;
    }

    public function setEmploye(?Employe $employe): self
    {
        $this->employe = $employe;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $value): self
    {
        $this->nom = $value;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $value): self
    {
        $this->description = $value;
        return $this;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function setCategorie(string $value): self
    {
        $this->categorie = $value;
        return $this;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }

    public function setEtat(string $value): self
    {
        $this->etat = $value;
        return $this;
    }
   /* #[ORM\Column(type: "text", nullable: true)]
private ?string $guideUtilisation = null;*/
#[ORM\Column(type: "text", nullable: true)]
private ?string $guideUtilisation = null;
public function getGuideUtilisation(): ?string
{
    return $this->guideUtilisation;
}
public function setGuideUtilisation(string $value): self
    {
        $this->guideUtilisation = $value;
        return $this;
    }


}