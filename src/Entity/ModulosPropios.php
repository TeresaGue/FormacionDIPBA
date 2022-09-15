<?php

namespace App\Entity;

use App\Repository\ModulosPropiosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModulosPropiosRepository::class)]
class ModulosPropios extends Formaciones
{
    #[ORM\Column(type: Types::TEXT)]
    private ?string $Objetivos = null;

    #[ORM\Column(length: 255)]
    private ?string $Duracion = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Contenido = null;

    #[ORM\Column]
    private ?bool $Con_practicas = null;

    #[ORM\Column]
    private ?int $Horas_formacion = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?RequisitosAlumnos $requisitosalumnos = null;

    #[ORM\OneToMany(mappedBy: 'modulosPropios', targetEntity: ItinerarioFormativos::class)]
    private Collection $relation2;

    public function __construct()
    {
        $this->relation2 = new ArrayCollection();
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

    public function getDuracion(): ?string
    {
        return $this->Duracion;
    }

    public function setDuracion(string $Duracion): self
    {
        $this->Duracion = $Duracion;

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

    public function getConPracticas(): ?bool
    {
        return $this->Con_practicas;
    }

    public function setConPracticas(bool $Con_practicas): self
    {
        $this->Con_practicas = $Con_practicas;

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

    public function getRelation(): ?RequisitosAlumnos
    {
        return $this->relation;
    }

    public function setRelation(?RequisitosAlumnos $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return Collection<int, ItinerarioFormativos>
     */
    public function getRelation2(): Collection
    {
        return $this->relation2;
    }

    public function addRelation2(ItinerarioFormativos $relation2): self
    {
        if (!$this->relation2->contains($relation2)) {
            $this->relation2->add($relation2);
            $relation2->setModulosPropios($this);
        }

        return $this;
    }

    public function removeRelation2(ItinerarioFormativos $relation2): self
    {
        if ($this->relation2->removeElement($relation2)) {
            // set the owning side to null (unless already changed)
            if ($relation2->getModulosPropios() === $this) {
                $relation2->setModulosPropios(null);
            }
        }

        return $this;
    }
}
