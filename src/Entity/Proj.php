<?php

namespace App\Entity;

use App\Repository\ProjRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjRepository::class)] /* @phpstan-ignore-line */
/**
 * @SuppressWarnings(PHPMD)
 */
class Proj
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id; /* @phpstan-ignore-line */

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Name; /* @phpstan-ignore-line */

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Score; /* @phpstan-ignore-line */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->Score;
    }

    public function setScore(?int $Score): self
    {
        $this->Score = $Score;

        return $this;
    }
}
