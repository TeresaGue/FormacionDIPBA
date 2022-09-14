<?php

namespace App\Entity;

use App\Repository\OcupacionesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OcupacionesRepository::class)]
class Ocupaciones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $Cno = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GruposProfesionales $gruposProfesionales = null;

    #[ORM\ManyToMany(targetEntity: CertificadosProfesionalidad::class, inversedBy: 'ocupaciones')]
    private Collection $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCno(): ?string
    {
        return $this->Cno;
    }

    public function setCno(string $Cno): self
    {
        $this->Cno = $Cno;

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

    public function getGruposProfesionales(): ?GruposProfesionales
    {
        return $this->gruposProfesionales;
    }

    public function setGruposProfesionales(?GruposProfesionales $gruposProfesionales): self
    {
        $this->gruposProfesionales = $gruposProfesionales;

        return $this;
    }

    /**
     * @return Collection<int, CertificadosProfesionalidad>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(CertificadosProfesionalidad $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
        }

        return $this;
    }

    public function removeRelation(CertificadosProfesionalidad $relation): self
    {
        $this->relation->removeElement($relation);

        return $this;
    }
}
