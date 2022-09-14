<?php

namespace App\Entity;

use App\Repository\GruposProfesionalesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GruposProfesionalesRepository::class)]
class GruposProfesionales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\OneToMany(mappedBy: 'gruposProfesionales', targetEntity: Ocupaciones::class)]
    private Collection $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Ocupaciones>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(Ocupaciones $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
            $relation->setGruposProfesionales($this);
        }

        return $this;
    }

    public function removeRelation(Ocupaciones $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getGruposProfesionales() === $this) {
                $relation->setGruposProfesionales(null);
            }
        }

        return $this;
    }
}
