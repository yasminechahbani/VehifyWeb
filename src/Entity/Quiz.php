<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
class Quiz
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "integer")]
    private int $score;

    #[ORM\Column(type: "string", length: 20)]
    private string $statut;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_test;

    #[ORM\Column(type: "integer")]
    private int $id_user;

    #[ORM\Column(type: "integer")]
    private int $rating;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
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

    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($value)
    {
        $this->id_user = $value;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($value)
    {
        $this->rating = $value;
    }
}
