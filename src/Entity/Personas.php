<?php

namespace App\Entity;

use App\Repository\PersonasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonasRepository::class)]
class Personas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Apellido1 = null;

    #[ORM\Column(length: 255)]
    private ?string $Apellido2 = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 9)]
    private ?string $Nif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha_nacimiento = null;

    #[ORM\Column]
    private ?int $Telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?bool $Sexo = null;

    #[ORM\Column]
    private ?bool $Disponibilidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellido1(): ?string
    {
        return $this->Apellido1;
    }

    public function setApellido1(string $Apellido1): self
    {
        $this->Apellido1 = $Apellido1;

        return $this;
    }

    public function getApellido2(): ?string
    {
        return $this->Apellido2;
    }

    public function setApellido2(string $Apellido2): self
    {
        $this->Apellido2 = $Apellido2;

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

    public function getNif(): ?string
    {
        return $this->Nif;
    }

    public function setNif(string $Nif): self
    {
        $this->Nif = $Nif;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->Fecha_nacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $Fecha_nacimiento): self
    {
        $this->Fecha_nacimiento = $Fecha_nacimiento;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->Telefono;
    }

    public function setTelefono(int $Telefono): self
    {
        $this->Telefono = $Telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function isSexo(): ?bool
    {
        return $this->Sexo;
    }

    public function setSexo(bool $Sexo): self
    {
        $this->Sexo = $Sexo;

        return $this;
    }

    public function isDisponibilidad(): ?bool
    {
        return $this->Disponibilidad;
    }

    public function setDisponibilidad(bool $Disponibilidad): self
    {
        $this->Disponibilidad = $Disponibilidad;

        return $this;
    }
}
