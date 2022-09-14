<?php

namespace App\Entity;

use App\Repository\SubplanesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubplanesRepository::class)]
class Subplanes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $Descripcion = null;

    #[ORM\ManyToOne(inversedBy: 'subplanes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GestionPlanes $relation = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ItinerarioFormativos $itinerarioFormativos = null;

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

    public function getRelation(): ?GestionPlanes
    {
        return $this->relation;
    }

    public function setRelation(?GestionPlanes $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    public function getItinerarioFormativos(): ?ItinerarioFormativos
    {
        return $this->itinerarioFormativos;
    }

    public function setItinerarioFormativos(?ItinerarioFormativos $itinerarioFormativos): self
    {
        $this->itinerarioFormativos = $itinerarioFormativos;

        return $this;
    }
}
