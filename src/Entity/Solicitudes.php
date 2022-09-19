<?php

namespace App\Entity;

use App\Repository\SolicitudesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolicitudesRepository::class)]
class Solicitudes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $Origen = null;

    #[ORM\Column]
    private ?bool $Validada = null;

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

    public function isValidada(): ?bool
    {
        return $this->Validada;
    }

    public function setValidada(bool $Validada): self
    {
        $this->Validada = $Validada;

        return $this;
    }
}
