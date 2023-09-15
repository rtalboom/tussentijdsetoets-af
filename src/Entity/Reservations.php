<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationsRepository::class)]
class Reservations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PointA = null;

    #[ORM\Column(length: 255)]
    private ?string $PointB = null;

    #[ORM\Column(length: 255)]
    private ?string $StartDateTime = null;

    #[ORM\Column(length: 255)]
    private ?string $EndDateTime = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $User = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPointA(): ?string
    {
        return $this->PointA;
    }

    public function setPointA(string $PointA): self
    {
        $this->PointA = $PointA;

        return $this;
    }

    public function getPointB(): ?string
    {
        return $this->PointB;
    }

    public function setPointB(string $PointB): self
    {
        $this->PointB = $PointB;

        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->StartDateTime;
    }

    public function setStartDateTime(string $StartDateTime): self
    {
        $this->StartDateTime = $StartDateTime;

        return $this;
    }

    public function getEndDateTime(): ?string
    {
        return $this->EndDateTime;
    }

    public function setEndDateTime(string $EndDateTime): self
    {
        $this->EndDateTime = $EndDateTime;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
