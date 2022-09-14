<?php

namespace App\Entity;

use App\Repository\ModulosFormativosCertificadosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModulosFormativosCertificadosRepository::class)]
class ModulosFormativosCertificados
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nivel = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Descripcion = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column]
    private ?int $Horas = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Contenido = null;

    #[ORM\ManyToOne(inversedBy: 'OneToMany')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UnidadesFormativas $unidadesFormativas = null;


    #[ORM\ManyToMany(targetEntity: CertificadosProfesionalidad::class)]
    private Collection $relation;

    public function __construct()
    {
        $this->ManyToMany = new ArrayCollection();
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNivel(): ?string
    {
        return $this->Nivel;
    }

    public function setNivel(string $Nivel): self
    {
        $this->Nivel = $Nivel;

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

    public function getCodigo(): ?string
    {
        return $this->Codigo;
    }

    public function setCodigo(string $Codigo): self
    {
        $this->Codigo = $Codigo;

        return $this;
    }

    public function getHoras(): ?int
    {
        return $this->Horas;
    }

    public function setHoras(int $Horas): self
    {
        $this->Horas = $Horas;

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

    public function getUnidadesFormativas(): ?UnidadesFormativas
    {
        return $this->unidadesFormativas;
    }

    public function setUnidadesFormativas(?UnidadesFormativas $unidadesFormativas): self
    {
        $this->unidadesFormativas = $unidadesFormativas;

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
