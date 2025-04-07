<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\User;
use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;

#[ORM\Entity]
class Compte
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

        #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "comptes")]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private User $id_user;

    #[ORM\Column(type: "string", length: 255)]
    private string $mot_de_passe;

    #[ORM\Column(type: "string", length: 255)]
    private string $image;

    #[ORM\Column(type: "string", length: 255)]
    private string $email;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($value)
    {
        $this->id_user = $value;
    }

    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    public function setMot_de_passe($value)
    {
        $this->mot_de_passe = $value;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($value)
    {
        $this->image = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    #[ORM\OneToMany(mappedBy: "id_compte", targetEntity: Reservation::class)]
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
                $reservation->setId_compte($this);
            }

            return $this;
        }

        public function removeReservation(Reservation $reservation): self
        {
            if ($this->reservations->removeElement($reservation)) {
                // set the owning side to null (unless already changed)
                if ($reservation->getId_compte() === $this) {
                    $reservation->setId_compte(null);
                }
            }

            return $this;
        }

        public function getMotDePasse(): ?string
        {
            return $this->mot_de_passe;
        }

        public function setMotDePasse(string $mot_de_passe): static
        {
            $this->mot_de_passe = $mot_de_passe;

            return $this;
        }

        public function getIdUser(): ?User
        {
            return $this->id_user;
        }

        public function setIdUser(?User $id_user): static
        {
            $this->id_user = $id_user;

            return $this;
        }
}
