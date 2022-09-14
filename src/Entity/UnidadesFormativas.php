<?php

namespace App\Entity;

use App\Repository\UnidadesFormativasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnidadesFormativasRepository::class)]
class UnidadesFormativas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $Codigo = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\OneToMany(mappedBy: 'unidadesFormativas', targetEntity: ModulosFormativosCertificados::class)]
    private Collection $OneToMany;

    public function __construct()
    {
        $this->OneToMany = new ArrayCollection();
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
     * @return Collection<int, ModulosFormativosCertificados>
     */
    public function getOneToMany(): Collection
    {
        return $this->OneToMany;
    }

    public function addOneToMany(ModulosFormativosCertificados $oneToMany): self
    {
        if (!$this->OneToMany->contains($oneToMany)) {
            $this->OneToMany->add($oneToMany);
            $oneToMany->setUnidadesFormativas($this);
        }

        return $this;
    }

    public function removeOneToMany(ModulosFormativosCertificados $oneToMany): self
    {
        if ($this->OneToMany->removeElement($oneToMany)) {
            // set the owning side to null (unless already changed)
            if ($oneToMany->getUnidadesFormativas() === $this) {
                $oneToMany->setUnidadesFormativas(null);
            }
        }

        return $this;
    }
}
