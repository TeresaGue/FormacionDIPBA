<?php

namespace App\Entity;

use App\Repository\GestionPlanesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GestionPlanesRepository::class)]
class GestionPlanes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Descripcion = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Requisitos = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Year_inicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Year_fin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Localidad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Destinatario = null;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Becas $becas = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?RequisitosCriteriosPlan $relation = null;

    #[ORM\OneToMany(mappedBy: 'relation', targetEntity: Subplanes::class)]
    private Collection $subplanes;

    public function __construct()
    {
        $this->subplanes = new ArrayCollection();
    }

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

    public function setDescripcion(?string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
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

    public function getYearInicio(): ?\DateTimeInterface
    {
        return $this->Year_inicio;
    }

    public function setYearInicio(?\DateTimeInterface $Year_inicio): self
    {
        $this->Year_inicio = $Year_inicio;

        return $this;
    }

    public function getYearFin(): ?\DateTimeInterface
    {
        return $this->Year_fin;
    }

    public function setYearFin(?\DateTimeInterface $Year_fin): self
    {
        $this->Year_fin = $Year_fin;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->Localidad;
    }

    public function setLocalidad(?string $Localidad): self
    {
        $this->Localidad = $Localidad;

        return $this;
    }

    public function getDestinatario(): ?string
    {
        return $this->Destinatario;
    }

    public function setDestinatario(?string $Destinatario): self
    {
        $this->Destinatario = $Destinatario;

        return $this;
    }

    public function getBecas(): ?Becas
    {
        return $this->becas;
    }

    public function setBecas(?Becas $becas): self
    {
        $this->becas = $becas;

        return $this;
    }

    public function getRelation(): ?RequisitosCriteriosPlan
    {
        return $this->relation;
    }

    public function setRelation(RequisitosCriteriosPlan $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return Collection<int, Subplanes>
     */
    public function getSubplanes(): Collection
    {
        return $this->subplanes;
    }

    public function addSubplane(Subplanes $subplane): self
    {
        if (!$this->subplanes->contains($subplane)) {
            $this->subplanes->add($subplane);
            $subplane->setRelation($this);
        }

        return $this;
    }

    public function removeSubplane(Subplanes $subplane): self
    {
        if ($this->subplanes->removeElement($subplane)) {
            // set the owning side to null (unless already changed)
            if ($subplane->getRelation() === $this) {
                $subplane->setRelation(null);
            }
        }

        return $this;
    }
}
