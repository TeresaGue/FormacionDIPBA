<?php

namespace App\Entity;

use App\Repository\ItinerariosFormativosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItinerariosFormativosRepository::class)]
class ItinerariosFormativos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha_inicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha_fin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $Hora_inicio = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $Hora_fin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenominacion(): ?string
    {
        return $this->Denominacion;
    }

    public function setDenominacion(string $Denominacion): self
    {
        $this->Denominacion = $Denominacion;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->Fecha_inicio;
    }

    public function setFechaInicio(\DateTimeInterface $Fecha_inicio): self
    {
        $this->Fecha_inicio = $Fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->Fecha_fin;
    }

    public function setFechaFin(\DateTimeInterface $Fecha_fin): self
    {
        $this->Fecha_fin = $Fecha_fin;

        return $this;
    }

    public function getHoraInicio(): ?\DateTimeInterface
    {
        return $this->Hora_inicio;
    }

    public function setHoraInicio(\DateTimeInterface $Hora_inicio): self
    {
        $this->Hora_inicio = $Hora_inicio;

        return $this;
    }

    public function getHoraFin(): ?\DateTimeInterface
    {
        return $this->Hora_fin;
    }

    public function setHoraFin(\DateTimeInterface $Hora_fin): self
    {
        $this->Hora_fin = $Hora_fin;

        return $this;
    }
}
