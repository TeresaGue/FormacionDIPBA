<?php

namespace App\Entity;

use App\Repository\RequisitosCriteriosPlanRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequisitosCriteriosPlanRepository::class)]
class RequisitosCriteriosPlan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Fecha_desempleo = null;

    #[ORM\Column]
    private ?bool $Sexo = null;

    #[ORM\Column]
    private ?bool $Inscrito_programa_juvenil_empleo = null;

    #[ORM\Column(length: 255)]
    private ?string $Localidad_empadronamiento = null;

    #[ORM\Column]
    private ?int $Edad_minima = null;

    #[ORM\Column]
    private ?int $Edad_maxima = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaDesempleo(): ?\DateTimeInterface
    {
        return $this->Fecha_desempleo;
    }

    public function setFechaDesempleo(\DateTimeInterface $Fecha_desempleo): self
    {
        $this->Fecha_desempleo = $Fecha_desempleo;

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

    public function isInscritoProgramaJuvenilEmpleo(): ?bool
    {
        return $this->Inscrito_programa_juvenil_empleo;
    }

    public function setInscritoProgramaJuvenilEmpleo(bool $Inscrito_programa_juvenil_empleo): self
    {
        $this->Inscrito_programa_juvenil_empleo = $Inscrito_programa_juvenil_empleo;

        return $this;
    }

    public function getLocalidadEmpadronamiento(): ?string
    {
        return $this->Localidad_empadronamiento;
    }

    public function setLocalidadEmpadronamiento(string $Localidad_empadronamiento): self
    {
        $this->Localidad_empadronamiento = $Localidad_empadronamiento;

        return $this;
    }

    public function getEdadMinima(): ?int
    {
        return $this->Edad_minima;
    }

    public function setEdadMinima(int $Edad_minima): self
    {
        $this->Edad_minima = $Edad_minima;

        return $this;
    }

    public function getEdadMaxima(): ?int
    {
        return $this->Edad_maxima;
    }

    public function setEdadMaxima(int $Edad_maxima): self
    {
        $this->Edad_maxima = $Edad_maxima;

        return $this;
    }
}
