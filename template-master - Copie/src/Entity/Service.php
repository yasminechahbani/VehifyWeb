<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;
use App\Repository\ServiceRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{

    #[ORM\Id]
    #[ORM\Column(name: "id_service", type: "integer")]
    #[ORM\GeneratedValue]
    private ?int $idService = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom du service est obligatoire.")]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "Le type de service est obligatoire.")]
    #[Assert\Length(
        max: 50,
        maxMessage: "Le type ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $type = null;

    #[ORM\Column(type: "string", length: 255, name: "heure_ouverture")]
    #[Assert\NotBlank(message: "L'heure d'ouverture est obligatoire.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "L'heure d'ouverture ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $heureOuverture = null;

    #[ORM\Column(type: "string", length: 255, name: "heure_fermeture")]
    #[Assert\NotBlank(message: "L'heure de fermeture est obligatoire.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "L'heure de fermeture ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $heureFermeture = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[Assert\Positive(message: "Le prix doit être positif.")]
    private ?float $prix = null;

    #[ORM\Column(type: "string", length: 20)]
    #[Assert\NotBlank(message: "Le gouvernorat est obligatoire.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Le gouvernorat ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $gouvernerat = null;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
    #[Assert\Positive(message: "Le numéro doit être positif.")]
    private ?int $numero = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire.")]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: "La description doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "L'email ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $email = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "La latitude est obligatoire.")]
    private ?float $latitude = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "La longitude est obligatoire.")]
    private ?float $longitude = null;

    public function getId_service(): ?int
    {
        return $this->idService;
    }
    
    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function setId_service(?int $value): self
    {
        $this->idService = $value;
        return $this;
    }
    
    public function setIdService(?int $value): self
    {
        $this->idService = $value;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $value): self
    {
        $this->nom = $value;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $value): self
    {
        $this->type = $value;
        return $this;
    }

    public function getHeure_ouverture(): ?string
    {
        return $this->heureOuverture;
    }
    
    public function getHeureOuverture(): ?string
    {
        return $this->heureOuverture;
    }

    public function setHeure_ouverture(?string $value): self
    {
        $this->heureOuverture = $value;
        return $this;
    }
    
    public function setHeureOuverture(?string $value): self
    {
        $this->heureOuverture = $value;
        return $this;
    }

    public function getHeure_fermeture(): ?string
    {
        return $this->heureFermeture;
    }
    
    public function getHeureFermeture(): ?string
    {
        return $this->heureFermeture;
    }

    public function setHeure_fermeture(?string $value): self
    {
        $this->heureFermeture = $value;
        return $this;
    }
    
    public function setHeureFermeture(?string $value): self
    {
        $this->heureFermeture = $value;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $value): self
    {
        $this->prix = $value;
        return $this;
    }

    public function getGouvernerat(): ?string
    {
        return $this->gouvernerat;
    }

    public function setGouvernerat(?string $value): self
    {
        $this->gouvernerat = $value;
        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $value): self
    {
        $this->numero = $value;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $value): self
    {
        $this->description = $value;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $value): self
    {
        $this->email = $value;
        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $value): self
    {
        $this->latitude = $value;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $value): self
    {
        $this->longitude = $value;
        return $this;
    }

    #[ORM\OneToMany(mappedBy: "id_service", targetEntity: Employe::class)]
    private Collection $employes;

        public function getEmployes(): Collection
        {
            return $this->employes;
        }
    
        public function addEmploye(Employe $employe): self
        {
            if (!$this->employes->contains($employe)) {
                $this->employes[] = $employe;
                $employe->setId_service($this);
            }
    
            return $this;
        }
    
        public function removeEmploye(Employe $employe): self
        {
            if ($this->employes->removeElement($employe)) {
                // set the owning side to null (unless already changed)
                if ($employe->getId_service() === $this) {
                    $employe->setId_service(null);
                }
            }
    
            return $this;
        }

    #[ORM\OneToMany(mappedBy: "id_service", targetEntity: Resultat::class)]
    private Collection $resultats;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'serviceId')]
    private Collection $reservations;

    public function __construct()
    {
        $this->employes = new ArrayCollection();
        $this->resultats = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

//     #[ORM\OneToMany(mappedBy: "service_id", targetEntity: Reservation::class)]
//     private Collection $reservations;

//         public function getReservations(): Collection
//         {
//             return $this->reservations;
//         }
    
//         public function addReservation(Reservation $reservation): self
//         {
//             if (!$this->reservations->contains($reservation)) {
//                 $this->reservations[] = $reservation;
//                 $reservation->setService_id($this);
//             }
    
//             return $this;
//         }
    
//         public function removeReservation(Reservation $reservation): self
//         {
//             if ($this->reservations->removeElement($reservation)) {
//                 // set the owning side to null (unless already changed)
//                 if ($reservation->getService_id() === $this) {
//                     $reservation->setService_id(null);
//                 }
//             }
    
//             return $this;
//         }

/**
 * @return Collection<int, Reservation>
 */
public function getReservations(): Collection
{
    return $this->reservations;
}

public function addReservation(Reservation $reservation): static
{
    if (!$this->reservations->contains($reservation)) {
        $this->reservations->add($reservation);
        $reservation->setServiceId($this);
    }

    return $this;
}

public function removeReservation(Reservation $reservation): static
{
    if ($this->reservations->removeElement($reservation)) {
        // set the owning side to null (unless already changed)
        if ($reservation->getServiceId() === $this) {
            $reservation->setServiceId(null);
        }
    }

    return $this;
}
}
