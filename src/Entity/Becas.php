<?php

namespace App\Entity;

use App\Repository\BecasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BecasRepository::class)]
class Becas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Requisitos = null;

    #[ORM\Column]
    private ?float $Importe = null;

    #[ORM\OneToMany(mappedBy: 'becas', targetEntity: GestionPlanes::class)]
    private Collection $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequisitos(): ?string
    {
        return $this->Requisitos;
    }

    public function setRequisitos(string $Requisitos): self
    {
        $this->Requisitos = $Requisitos;

        return $this;
    }

    public function getImporte(): ?float
    {
        return $this->Importe;
    }

    public function setImporte(float $Importe): self
    {
        $this->Importe = $Importe;

        return $this;
    }

    /**
     * @return Collection<int, GestionPlanes>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(GestionPlanes $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
            $relation->setBecas($this);
        }

        return $this;
    }

    public function removeRelation(GestionPlanes $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getBecas() === $this) {
                $relation->setBecas(null);
            }
        }

        return $this;
    }
}
