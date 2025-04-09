<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Employe;
use Doctrine\Common\Collections\Collection;
use App\Entity\Quiz;

#[ORM\Entity]
class Permis
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_permis;
    #[ORM\ManyToOne(targetEntity: Employe::class, inversedBy: "permiss")]
#[ORM\JoinColumn(name: "id_employe", referencedColumnName: "id_employe", onDelete: "CASCADE")]
private Employe $idEmploye;

    


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

    public function getIdEmploye()
    {
        return $this->idEmploye;
    }

    public function setIdEmploye($value)
    {
        $this->idEmploye = $value;
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

    #[ORM\OneToMany(mappedBy: "id_permis", targetEntity: Quiz::class)]
    private Collection $quizs;

        public function getQuizs(): Collection
        {
            return $this->quizs;
        }
    
        public function addQuiz(Quiz $quiz): self
        {
            if (!$this->quizs->contains($quiz)) {
                $this->quizs[] = $quiz;
                $quiz->setId_permis($this);
            }
    
            return $this;
        }
    
        public function removeQuiz(Quiz $quiz): self
        {
            if ($this->quizs->removeElement($quiz)) {
                // set the owning side to null (unless already changed)
                if ($quiz->getId_permis() === $this) {
                    $quiz->setId_permis(null);
                }
            }
    
            return $this;
        }
}
