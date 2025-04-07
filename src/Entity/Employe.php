<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Service;

use Doctrine\Common\Collections\Collection;
use App\Entity\Permis;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
class Employe
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idEmploye = null;


        #[ORM\ManyToOne(targetEntity: Service::class, inversedBy: "employes")]
    #[ORM\JoinColumn(name: 'id_service', referencedColumnName: 'id_service', onDelete: 'CASCADE')]
    private Service $id_service;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^[^\d]*$/",
        message: "Le nom ne doit pas contenir de chiffres."
    )]
    private string $nom;
    
    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^[^\d]*$/",
        message: "Le prénom ne doit pas contenir de chiffres."
    )]
    private string $prenom;

#[ORM\Column(type: "string", length: 100)]
#[Assert\NotBlank(message: "L'email est obligatoire.")]
#[Assert\Email(message: "L'adresse email '{{ value }}' n'est pas valide.")]
private string $email;

#[ORM\Column(type: "integer")]
#[Assert\NotBlank(message: "L'âge est obligatoire.")]
#[Assert\Range(
    min: 18,
    max: 60,
    notInRangeMessage: "L'âge doit être entre {{ min }} et {{ max }} ans."
)]
private int $age;

#[ORM\Column(type: "date")]
#[Assert\NotNull(message: "La date d'embauche est obligatoire.")]
#[Assert\Type(type: \DateTimeInterface::class, message: "La date doit être valide.")]
private ?\DateTimeInterface $dateEmbauche = null;



#[ORM\Column(type: "string", length: 50)]
#[Assert\NotBlank(message: "Le poste est obligatoire.")]
#[Assert\Regex(
    pattern: "/^[^\d]*$/",
    message: "Le poste ne doit pas contenir de chiffres."
)]
private string $poste;

#[ORM\Column(type: "string", length: 20)]
#[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
#[Assert\Regex(
    pattern: "/^\+?[0-9]{8,15}$/",
    message: "Le numéro de téléphone est invalide."
)]
private string $tel;

#[ORM\Column(type: "float")]
#[Assert\NotBlank(message: "Le salaire est obligatoire.")]
#[Assert\Positive(message: "Le salaire doit être un nombre positif.")]
private float $salaire;

#[ORM\Column(type: "string", length: 20)]
#[Assert\NotBlank(message: "Le statut est obligatoire.")]
#[Assert\Regex(
    pattern: "/^[^\d]*$/",
    message: "Le statut ne doit pas contenir de chiffres."
)]
private string $statut;


    public function getidEmploye()
    {
        return $this->idEmploye;
    }

    public function setidEmploye($value)
    {
        $this->idEmploye = $value;
    }

    public function getId_service()
    {
        return $this->id_service;
    }

    public function setId_service($value)
    {
        $this->id_service = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($value)
    {
        $this->prenom = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($value)
    {
        $this->age = $value;
    }

    public function getdateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setdateEmbauche($value)
    {
        $this->dateEmbauche = $value;
    }

    public function getPoste()
    {
        return $this->poste;
    }

    public function setPoste($value)
    {
        $this->poste = $value;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($value)
    {
        $this->tel = $value;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($value)
    {
        $this->salaire = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    #[ORM\OneToMany(mappedBy: "idEmploye", targetEntity: Equipement::class)]
    private Collection $equipements;

        public function getEquipements(): Collection
        {
            return $this->equipements;
        }
    
        public function addEquipement(Equipement $equipement): self
        {
            if (!$this->equipements->contains($equipement)) {
                $this->equipements[] = $equipement;
                $equipement->setidEmploye($this);
            }
    
            return $this;
        }
    
        public function removeEquipement(Equipement $equipement): self
        {
            if ($this->equipements->removeElement($equipement)) {
                // set the owning side to null (unless already changed)
                if ($equipement->getidEmploye() === $this) {
                    $equipement->setidEmploye(null);
                }
            }
    
            return $this;
        }

    #[ORM\OneToMany(mappedBy: "idEmploye", targetEntity: Permis::class)]
    private Collection $permiss;
}
