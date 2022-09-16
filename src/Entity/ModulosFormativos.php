<?php

namespace App\Entity;

use App\Repository\ModulosFormativosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModulosFormativosRepository::class)]
class ModulosFormativos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $Tipo_modulos = null;

    #[ORM\Column]
    private ?int $Nivel = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Objetivos = null;

    #[ORM\Column]
    private ?int $Duración = null;

    #[ORM\Column]
    private ?int $Horas_formacion = null;

    #[ORM\Column]
    private ?bool $Con_practicas = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Contenido = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isTipoModulos(): ?bool
    {
        return $this->Tipo_modulos;
    }

    public function setTipoModulos(bool $Tipo_modulos): self
    {
        $this->Tipo_modulos = $Tipo_modulos;

        return $this;
    }

    public function getNivel(): ?int
    {
        return $this->Nivel;
    }

    public function setNivel(int $Nivel): self
    {
        $this->Nivel = $Nivel;

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

    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    public function setCodigo(string $Codigo): self
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    public function getObjetivos(): ?string
    {
        return $this->Objetivos;
    }

    public function setObjetivos(string $Objetivos): self
    {
        $this->Objetivos = $Objetivos;

        return $this;
    }

    public function getDuración(): ?int
    {
        return $this->Duración;
    }

    public function setDuración(int $Duración): self
    {
        $this->Duración = $Duración;

        return $this;
    }

    public function getHorasFormacion(): ?int
    {
        return $this->Horas_formacion;
    }

    public function setHorasFormacion(int $Horas_formacion): self
    {
        $this->Horas_formacion = $Horas_formacion;

        return $this;
    }

    public function isConPracticas(): ?bool
    {
        return $this->Con_practicas;
    }

    public function setConPracticas(bool $Con_practicas): self
    {
        $this->Con_practicas = $Con_practicas;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->Contenido;
    }

    public function setContenido(string $Contenido): self
    {
        $this->Contenido = $Contenido;

        return $this;
    }
}
