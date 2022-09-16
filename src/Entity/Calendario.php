<?php

namespace App\Entity;

use App\Repository\CalendarioRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalendarioRepository::class)]
class Calendario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Tipo_dia = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha_dia = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Observaciones = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoDia(): ?string
    {
        return $this->Tipo_dia;
    }

    public function setTipoDia(string $Tipo_dia): self
    {
        $this->Tipo_dia = $Tipo_dia;

        return $this;
    }

    public function getFechaDia(): ?\DateTimeInterface
    {
        return $this->Fecha_dia;
    }

    public function setFechaDia(\DateTimeInterface $Fecha_dia): self
    {
        $this->Fecha_dia = $Fecha_dia;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }

    public function setObservaciones(string $Observaciones): self
    {
        $this->Observaciones = $Observaciones;

        return $this;
    }
}
