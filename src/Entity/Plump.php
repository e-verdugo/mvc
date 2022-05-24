<?php

namespace App\Entity;

use App\Repository\PlumpRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlumpRepository::class)]
class Plump
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'array', nullable: true)]
    private $Score = [];

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Player;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?array
    {
        return $this->Score;
    }

    public function setScore(?array $Score): self
    {
        $this->Score = $Score;

        return $this;
    }

    public function getPlayer(): ?string
    {
        return $this->Player;
    }

    public function setPlayer(?string $Player): self
    {
        $this->Player = $Player;

        return $this;
    }
}
