<?php

namespace App\Entity;

use App\Repository\FormacionesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormacionesRepository::class)]
class Formaciones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Codigo = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?AreasProfesionales $areasProfesionales = null;

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

    public function getAreasProfesionales(): ?AreasProfesionales
    {
        return $this->areasProfesionales;
    }

    public function setAreasProfesionales(?AreasProfesionales $areasProfesionales): self
    {
        $this->areasProfesionales = $areasProfesionales;

        return $this;
    }
}
