<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Reservation;
use Doctrine\Common\Collections\Collection;
use App\Entity\Resultat;

#[ORM\Entity]
class Paiement
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_paiement;

        #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: "paiements")]
    #[ORM\JoinColumn(name: 'id_reservation', referencedColumnName: 'id_reservation', onDelete: 'CASCADE')]
    private Reservation $id_reservation;

    #[ORM\Column(type: "string", length: 255)]
    private string $numeroCarte;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_paiement;

    #[ORM\Column(type: "float")]
    private float $prix;

    #[ORM\Column(type: "string", length: 20)]
    private string $statut;

    #[ORM\Column(type: "string", length: 20)]
    private string $telephone;

    #[ORM\Column(type: "string", length: 10)]
    private string $date_expiration;

    #[ORM\Column(type: "string", length: 5)]
    private string $cvc;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom_titulaire_carte;

    public function getId_paiement()
    {
        return $this->id_paiement;
    }

    public function setId_paiement($value)
    {
        $this->id_paiement = $value;
    }

    public function getId_reservation()
    {
        return $this->id_reservation;
    }

    public function setId_reservation($value)
    {
        $this->id_reservation = $value;
    }

    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    public function setNumeroCarte($value)
    {
        $this->numeroCarte = $value;
    }

    public function getDate_paiement()
    {
        return $this->date_paiement;
    }

    public function setDate_paiement($value)
    {
        $this->date_paiement = $value;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($value)
    {
        $this->prix = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($value)
    {
        $this->telephone = $value;
    }

    public function getDate_expiration()
    {
        return $this->date_expiration;
    }

    public function setDate_expiration($value)
    {
        $this->date_expiration = $value;
    }

    public function getCvc()
    {
        return $this->cvc;
    }

    public function setCvc($value)
    {
        $this->cvc = $value;
    }

    public function getNom_titulaire_carte()
    {
        return $this->nom_titulaire_carte;
    }

    public function setNom_titulaire_carte($value)
    {
        $this->nom_titulaire_carte = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_paiement", targetEntity: Resultat::class)]
    private Collection $resultats;

        public function getResultats(): Collection
        {
            return $this->resultats;
        }
    
        public function addResultat(Resultat $resultat): self
        {
            if (!$this->resultats->contains($resultat)) {
                $this->resultats[] = $resultat;
                $resultat->setId_paiement($this);
            }
    
            return $this;
        }
    
        public function removeResultat(Resultat $resultat): self
        {
            if ($this->resultats->removeElement($resultat)) {
                // set the owning side to null (unless already changed)
                if ($resultat->getId_paiement() === $this) {
                    $resultat->setId_paiement(null);
                }
            }
    
            return $this;
        }
}
