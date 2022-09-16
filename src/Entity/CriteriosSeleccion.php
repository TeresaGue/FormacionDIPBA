<?php

namespace App\Entity;

use App\Repository\CriteriosSeleccionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CriteriosSeleccionRepository::class)]
class CriteriosSeleccion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\Column(length: 255)]
    private ?string $Titulacion_academica = null;

    #[ORM\Column(length: 255)]
    private ?string $Formacion_previa = null;

    #[ORM\Column]
    private ?int $Edad = null;

    #[ORM\Column(length: 255)]
    private ?string $Experiencia_previa = null;

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

    public function getTitulacionAcademica(): ?string
    {
        return $this->Titulacion_academica;
    }

    public function setTitulacionAcademica(string $Titulacion_academica): self
    {
        $this->Titulacion_academica = $Titulacion_academica;

        return $this;
    }

    public function getFormacionPrevia(): ?string
    {
        return $this->Formacion_previa;
    }

    public function setFormacionPrevia(string $Formacion_previa): self
    {
        $this->Formacion_previa = $Formacion_previa;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->Edad;
    }

    public function setEdad(int $Edad): self
    {
        $this->Edad = $Edad;

        return $this;
    }

    public function getExperienciaPrevia(): ?string
    {
        return $this->Experiencia_previa;
    }

    public function setExperienciaPrevia(string $Experiencia_previa): self
    {
        $this->Experiencia_previa = $Experiencia_previa;

        return $this;
    }
}
