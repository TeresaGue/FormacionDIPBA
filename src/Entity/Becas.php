<?php

namespace App\Entity;

use App\Repository\BecasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BecasRepository::class)]
class Becas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Requisitos = null;

    #[ORM\Column]
    private ?float $Importe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequisitos(): ?string
    {
        return $this->Requisitos;
    }

    public function setRequisitos(string $Requisitos): self
    {
        $this->Requisitos = $Requisitos;

        return $this;
    }

    public function getImporte(): ?float
    {
        return $this->Importe;
    }

    public function setImporte(float $Importe): self
    {
        $this->Importe = $Importe;

        return $this;
    }
}
