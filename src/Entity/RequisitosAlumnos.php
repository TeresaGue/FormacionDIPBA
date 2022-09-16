<?php

namespace App\Entity;

use App\Repository\RequisitosAlumnosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequisitosAlumnosRepository::class)]
class RequisitosAlumnos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\Column]
    private ?int $Nivel_academico = null;

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

    public function getDenominacion(): ?string
    {
        return $this->Denominacion;
    }

    public function setDenominacion(string $Denominacion): self
    {
        $this->Denominacion = $Denominacion;

        return $this;
    }

    public function getNivelAcademico(): ?int
    {
        return $this->Nivel_academico;
    }

    public function setNivelAcademico(int $Nivel_academico): self
    {
        $this->Nivel_academico = $Nivel_academico;

        return $this;
    }
}
