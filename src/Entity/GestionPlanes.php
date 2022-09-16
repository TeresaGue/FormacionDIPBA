<?php

namespace App\Entity;

use App\Repository\GestionPlanesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GestionPlanesRepository::class)]
class GestionPlanes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Descripcion = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Requisitos = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Año_inicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Año_fin = null;

    #[ORM\Column(length: 255)]
    private ?string $Localidad = null;

    #[ORM\Column(length: 255)]
    private ?string $Destinatario = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    public function setCodigo(string $Codigo): self
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
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

    public function getAñoInicio(): ?\DateTimeInterface
    {
        return $this->Año_inicio;
    }

    public function setAñoInicio(\DateTimeInterface $Año_inicio): self
    {
        $this->Año_inicio = $Año_inicio;

        return $this;
    }

    public function getAñoFin(): ?\DateTimeInterface
    {
        return $this->Año_fin;
    }

    public function setAñoFin(\DateTimeInterface $Año_fin): self
    {
        $this->Año_fin = $Año_fin;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->Localidad;
    }

    public function setLocalidad(string $Localidad): self
    {
        $this->Localidad = $Localidad;

        return $this;
    }

    public function getDestinatario(): ?string
    {
        return $this->Destinatario;
    }

    public function setDestinatario(string $Destinatario): self
    {
        $this->Destinatario = $Destinatario;

        return $this;
    }
}
