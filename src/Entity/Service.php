<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ServiceRepository;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[ORM\Table(name: 'service')]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_service = null;

    public function getId_service(): ?int
    {
        return $this->id_service;
    }

    public function setId_service(int $id_service): self
    {
        $this->id_service = $id_service;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $heure_ouverture = null;

    public function getHeure_ouverture(): ?string
    {
        return $this->heure_ouverture;
    }

    public function setHeure_ouverture(string $heure_ouverture): self
    {
        $this->heure_ouverture = $heure_ouverture;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $heure_fermeture = null;

    public function getHeure_fermeture(): ?string
    {
        return $this->heure_fermeture;
    }

    public function setHeure_fermeture(string $heure_fermeture): self
    {
        $this->heure_fermeture = $heure_fermeture;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $prix = null;

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $gouvernerat = null;

    public function getGouvernerat(): ?string
    {
        return $this->gouvernerat;
    }

    public function setGouvernerat(string $gouvernerat): self
    {
        $this->gouvernerat = $gouvernerat;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $numero = null;

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $latitude = null;

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $longitude = null;

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Employe::class, mappedBy: 'service')]
    private Collection $employes;

    /**
     * @return Collection<int, Employe>
     */
    public function getEmployes(): Collection
    {
        if (!$this->employes instanceof Collection) {
            $this->employes = new ArrayCollection();
        }
        return $this->employes;
    }

    public function addEmploye(Employe $employe): self
    {
        if (!$this->getEmployes()->contains($employe)) {
            $this->getEmployes()->add($employe);
        }
        return $this;
    }

    public function removeEmploye(Employe $employe): self
    {
        $this->getEmployes()->removeElement($employe);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Permi::class, mappedBy: 'service')]
    private Collection $permis;

    /**
     * @return Collection<int, Permi>
     */
    public function getPermis(): Collection
    {
        if (!$this->permis instanceof Collection) {
            $this->permis = new ArrayCollection();
        }
        return $this->permis;
    }

    public function addPermi(Permi $permi): self
    {
        if (!$this->getPermis()->contains($permi)) {
            $this->getPermis()->add($permi);
        }
        return $this;
    }

    public function removePermi(Permi $permi): self
    {
        $this->getPermis()->removeElement($permi);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'service')]
    private Collection $reservations;

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        if (!$this->reservations instanceof Collection) {
            $this->reservations = new ArrayCollection();
        }
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->getReservations()->contains($reservation)) {
            $this->getReservations()->add($reservation);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        $this->getReservations()->removeElement($reservation);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Resultat::class, mappedBy: 'service')]
    private Collection $resultats;

    /**
     * @return Collection<int, Resultat>
     */
    public function getResultats(): Collection
    {
        if (!$this->resultats instanceof Collection) {
            $this->resultats = new ArrayCollection();
        }
        return $this->resultats;
    }

    public function addResultat(Resultat $resultat): self
    {
        if (!$this->getResultats()->contains($resultat)) {
            $this->getResultats()->add($resultat);
        }
        return $this;
    }

    public function removeResultat(Resultat $resultat): self
    {
        $this->getResultats()->removeElement($resultat);
        return $this;
    }

}
