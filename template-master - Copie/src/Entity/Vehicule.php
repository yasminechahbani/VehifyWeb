<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\CarteGrise;
use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;

#[ORM\Entity]
class Vehicule
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idVehicule=null;

    #[ORM\ManyToOne(targetEntity: CarteGrise::class, inversedBy: "vehicules")]
    #[ORM\JoinColumn(name: "id_carte_grise", referencedColumnName: "id_carte_grise", onDelete: "CASCADE")]
    private ?CarteGrise $carteGrise = null;

    #[ORM\Column(type: "string", length: 50)]
    private ?string $marque=null;

    #[ORM\Column(type: "string", length: 50)]
    private ?string $modele=null;

    #[ORM\Column(type: "string", length: 20)]
    private ?string $immatriculation=null;

    #[ORM\Column(type: "string", length: 50)]
    private ?string $type=null;

    #[ORM\Column(type: "string", length: 30)]
    private ?string $couleur=null;

    #[ORM\Column(type: "integer")]
    private ?int $kilometrage=null;

    #[ORM\Column(type: "string", length: 100)]
    private ?string $statut=null;

    // Getter de id_vehicule
    public function setIdVehicule(int $idVehicule): static
    {
        $this->idVehicule = $idVehicule;
        return $this;
    }


    public function getId_carte_grise()
    {
        return $this->id_carte_grise;
    }

    public function setId_carte_grise($value)
    {
        $this->id_carte_grise = $value;
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

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    public function setImmatriculation($value)
    {
        $this->immatriculation = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($value)
    {
        $this->couleur = $value;
    }

    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    public function setKilometrage($value)
    {
        $this->kilometrage = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_vehicule", targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

        public function getReservations(): Collection
        {
            return $this->reservations;
        }

        public function addReservation(Reservation $reservation): self
        {
            if (!$this->reservations->contains($reservation)) {
                $this->reservations[] = $reservation;
                $reservation->setId_vehicule($this);
            }

            return $this;
        }

        public function removeReservation(Reservation $reservation): self
        {
            if ($this->reservations->removeElement($reservation)) {
                // set the owning side to null (unless already changed)
                if ($reservation->getId_vehicule() === $this) {
                    $reservation->setId_vehicule(null);
                }
            }

            return $this;
        }

        public function getIdVehicule(): ?int
        {
            return $this->idVehicule;
        }



    public function getCarteGrise(): ?CarteGrise
    {
        return $this->carteGrise;
    }

    public function setCarteGrise(?CarteGrise $carteGrise): static
    {
        $this->carteGrise = $carteGrise;
        return $this;
    }

    // Méthode pour vérifier si un véhicule existe déjà pour cette carte grise
    public function isCarteGriseDejaAssociee(EntityManagerInterface $entityManager): bool
    {
        // Recherche un véhicule existant avec cette carte grise
        $existingVehicule = $entityManager->getRepository(Vehicule::class)->findOneBy(['carteGrise' => $this->carteGrise]);

        // Retourne true si un véhicule est trouvé, sinon false
        return $existingVehicule !== null;
    }

}
