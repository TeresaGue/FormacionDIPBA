<?php

namespace App\Entity;

use App\Repository\SOLICITUDESRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SOLICITUDESRepository::class)]
class SOLICITUDES
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $Origen = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isOrigen(): ?bool
    {
        return $this->Origen;
    }

    public function setOrigen(bool $Origen): self
    {
        $this->Origen = $Origen;

        return $this;
    }
}
