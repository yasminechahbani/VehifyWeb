<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $score = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateTest = null;
     #[ORM\Column]
    private ?int $idUser = null;

    /*#[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?int $idUser = null;*/

    #[ORM\Column(nullable: true)]
    private ?int $rating = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDateTest(): ?\DateTimeInterface
    {
        return $this->dateTest;
    }

    public function setDateTest(\DateTimeInterface $dateTest): static
    {
        $this->dateTest = $dateTest;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }
    /*#[ORM\OneToOne(targetEntity: Permis::class, mappedBy: "quiz")]
    private ?Permis $permis = null;
   */
    // In Quiz.php
    #[ORM\OneToOne(targetEntity: Permis::class, mappedBy: "idQuiz")]
    private ?Permis $permis = null;

    public function getPermis(): ?Permis
    {
        return $this->permis;
    }

    public function setPermis(?Permis $permis): self
    {
        $this->permis = $permis;

        // Set the owning side of the relation if necessary
        if ($permis !== null && $permis->getQuiz() !== $this) {
            $permis->setQuiz($this);
        }

        return $this;
    }
}