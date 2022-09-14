<?php

namespace App\Entity;

use App\Repository\FamiliasProfesionalesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FamiliasProfesionalesRepository::class)]
class FamiliasProfesionales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\OneToMany(mappedBy: 'familiasProfesionales', targetEntity: AreasProfesionales::class)]
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
     * @return Collection<int, AreasProfesionales>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(AreasProfesionales $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
            $relation->setFamiliasProfesionales($this);
        }

        return $this;
    }

    public function removeRelation(AreasProfesionales $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getFamiliasProfesionales() === $this) {
                $relation->setFamiliasProfesionales(null);
            }
        }

        return $this;
    }
}
