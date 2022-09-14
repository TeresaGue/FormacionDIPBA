<?php

namespace App\Entity;

use App\Repository\RequisitosFormadoresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequisitosFormadoresRepository::class)]
class RequisitosFormadores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Acreditacion = null;

    #[ORM\Column]
    private ?int $Años_experiencia_profesional_con_titulacion = null;

    #[ORM\Column]
    private ?int $Años_experiencia_profesional_sin_titulacion = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?ModulosPropios $relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAcreditacion(): ?string
    {
        return $this->Acreditacion;
    }

    public function setAcreditacion(string $Acreditacion): self
    {
        $this->Acreditacion = $Acreditacion;

        return $this;
    }

    public function getAñosExperienciaProfesionalConTitulacion(): ?int
    {
        return $this->Años_experiencia_profesional_con_titulacion;
    }

    public function setAñosExperienciaProfesionalConTitulacion(int $Años_experiencia_profesional_con_titulacion): self
    {
        $this->Años_experiencia_profesional_con_titulacion = $Años_experiencia_profesional_con_titulacion;

        return $this;
    }

    public function getAñosExperienciaProfesionalSinTitulacion(): ?int
    {
        return $this->Años_experiencia_profesional_sin_titulacion;
    }

    public function setAñosExperienciaProfesionalSinTitulacion(int $Años_experiencia_profesional_sin_titulacion): self
    {
        $this->Años_experiencia_profesional_sin_titulacion = $Años_experiencia_profesional_sin_titulacion;

        return $this;
    }

    public function getRelation(): ?ModulosPropios
    {
        return $this->relation;
    }

    public function setRelation(ModulosPropios $relation): self
    {
        $this->relation = $relation;

        return $this;
    }
}
