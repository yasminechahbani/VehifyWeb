<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Compte;

#[ORM\Entity]
class User
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 50)]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    private string $prenom;

    #[ORM\Column(type: "string", length: 20)]
    private string $tel;

    #[ORM\Column(type: "string", length: 100)]
    private string $localistation;

    #[ORM\Column(type: "string", length: 50)]
    private string $status;

    #[ORM\Column(type: "string", length: 50)]
    private string $role;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
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

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($value)
    {
        $this->tel = $value;
    }

    public function getLocalistation()
    {
        return $this->localistation;
    }

    public function setLocalistation($value)
    {
        $this->localistation = $value;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($value)
    {
        $this->role = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_user", targetEntity: Quiz::class)]
    private Collection $quizs;

        public function getQuizs(): Collection
        {
            return $this->quizs;
        }
    
        public function addQuiz(Quiz $quiz): self
        {
            if (!$this->quizs->contains($quiz)) {
                $this->quizs[] = $quiz;
                $quiz->setId_user($this);
            }
    
            return $this;
        }
    
        public function removeQuiz(Quiz $quiz): self
        {
            if ($this->quizs->removeElement($quiz)) {
                // set the owning side to null (unless already changed)
                if ($quiz->getId_user() === $this) {
                    $quiz->setId_user(null);
                }
            }
    
            return $this;
        }

    #[ORM\OneToMany(mappedBy: "id_user", targetEntity: Compte::class)]
    private Collection $comptes;

    public function __toString(): string
    {
        return $this->nom.' '.$this->prenom;
    }
}
