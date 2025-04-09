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

    #[ORM\Column(type: "string", length: 20)]
    private string $etat;

    #[ORM\Column(type: "string", length: 50)]
    private string $moyen_paiement;

    #[ORM\Column(type: "float")]
    private float $montant;

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

    public function getEtat()
    {
        return $this->etat;
    }

    public function setEtat($value)
    {
        $this->etat = $value;
    }

    public function getMoyen_paiement()
    {
        return $this->moyen_paiement;
    }

    public function setMoyen_paiement($value)
    {
        $this->moyen_paiement = $value;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($value)
    {
        $this->montant = $value;
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
