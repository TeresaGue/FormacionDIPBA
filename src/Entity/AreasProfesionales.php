<?php

namespace App\Entity;

use App\Repository\AreasProfesionalesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AreasProfesionalesRepository::class)]
class AreasProfesionales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FamiliasProfesionales $familiasProfesionales = null;

    #[ORM\OneToMany(mappedBy: 'areasProfesionales', targetEntity: Formaciones::class)]
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

    public function getFamiliasProfesionales(): ?FamiliasProfesionales
    {
        return $this->familiasProfesionales;
    }

    public function setFamiliasProfesionales(?FamiliasProfesionales $familiasProfesionales): self
    {
        $this->familiasProfesionales = $familiasProfesionales;

        return $this;
    }

    /**
     * @return Collection<int, Formaciones>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(Formaciones $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
            $relation->setAreasProfesionales($this);
        }

        return $this;
    }

    public function removeRelation(Formaciones $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getAreasProfesionales() === $this) {
                $relation->setAreasProfesionales(null);
            }
        }

        return $this;
    }
}
