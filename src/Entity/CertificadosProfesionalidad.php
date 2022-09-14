<?php

namespace App\Entity;

use App\Repository\CertificadosProfesionalidadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificadosProfesionalidadRepository::class)]
class CertificadosProfesionalidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Horas_formacion = null;

    #[ORM\Column]
    private ?int $Horas_practicas = null;

    #[ORM\Column]
    private ?int $Nivel = null;

    #[ORM\OneToMany(mappedBy: 'certificadosProfesionalidad', targetEntity: ItinerarioFormativos::class)]
    private Collection $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getHorasPracticas(): ?int
    {
        return $this->Horas_practicas;
    }

    public function setHorasPracticas(int $Horas_practicas): self
    {
        $this->Horas_practicas = $Horas_practicas;

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

    /**
     * @return Collection<int, ItinerarioFormativos>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(ItinerarioFormativos $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
            $relation->setCertificadosProfesionalidad($this);
        }

        return $this;
    }

    public function removeRelation(ItinerarioFormativos $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getCertificadosProfesionalidad() === $this) {
                $relation->setCertificadosProfesionalidad(null);
            }
        }

        return $this;
    }
}
