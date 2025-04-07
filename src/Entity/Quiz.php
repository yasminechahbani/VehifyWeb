<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Permis;

#[ORM\Entity]
class Quiz
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

        #[ORM\ManyToOne(targetEntity: Permis::class, inversedBy: "quizs")]
    #[ORM\JoinColumn(name: 'id_permis', referencedColumnName: 'id_permis', onDelete: 'CASCADE')]
    private Permis $id_permis;

    #[ORM\Column(type: "integer")]
    private int $score;

    #[ORM\Column(type: "string", length: 20)]
    private string $statut;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_test;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getId_permis()
    {
        return $this->id_permis;
    }

    public function setId_permis($value)
    {
        $this->id_permis = $value;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($value)
    {
        $this->score = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    public function getDate_test()
    {
        return $this->date_test;
    }

    public function setDate_test($value)
    {
        $this->date_test = $value;
    }

    public function getDateTest(): ?\DateTimeInterface
    {
        return $this->date_test;
    }

    public function setDateTest(\DateTimeInterface $date_test): static
    {
        $this->date_test = $date_test;

        return $this;
    }

    public function getIdPermis(): ?Permis
    {
        return $this->id_permis;
    }

    public function setIdPermis(?Permis $id_permis): static
    {
        $this->id_permis = $id_permis;

        return $this;
    }
}
