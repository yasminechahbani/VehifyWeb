<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\PaiementRepository;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
#[ORM\Table(name: 'paiement')]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_paiement = null;

    public function getId_paiement(): ?int
    {
        return $this->id_paiement;
    }

    public function setId_paiement(int $id_paiement): self
    {
        $this->id_paiement = $id_paiement;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: 'paiements')]
    #[ORM\JoinColumn(name: 'id_reservation', referencedColumnName: 'id_reservation')]
    private ?Reservation $reservation = null;

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $numeroCarte = null;

    public function getNumeroCarte(): ?string
    {
        return $this->numeroCarte;
    }

    public function setNumeroCarte(string $numeroCarte): self
    {
        $this->numeroCarte = $numeroCarte;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date_paiement = null;

    public function getDate_paiement(): ?\DateTimeInterface
    {
        return $this->date_paiement;
    }

    public function setDate_paiement(\DateTimeInterface $date_paiement): self
    {
        $this->date_paiement = $date_paiement;
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
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $telephone = null;

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $date_expiration = null;

    public function getDate_expiration(): ?string
    {
        return $this->date_expiration;
    }

    public function setDate_expiration(string $date_expiration): self
    {
        $this->date_expiration = $date_expiration;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $cvc = null;

    public function getCvc(): ?string
    {
        return $this->cvc;
    }

    public function setCvc(string $cvc): self
    {
        $this->cvc = $cvc;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom_titulaire_carte = null;

    public function getNom_titulaire_carte(): ?string
    {
        return $this->nom_titulaire_carte;
    }

    public function setNom_titulaire_carte(string $nom_titulaire_carte): self
    {
        $this->nom_titulaire_carte = $nom_titulaire_carte;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Resultat::class, mappedBy: 'paiement')]
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
