<?php

namespace App\Entity;

use App\Repository\ProvinciasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProvinciasRepository::class)]
class Provincias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\ManyToOne(inversedBy: 'comunidades')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comunidades $comunidades = null;

    #[ORM\OneToMany(mappedBy: 'provincias', targetEntity: Municipios::class)]
    private Collection $provincias;

    public function __construct()
    {
        $this->provincias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getComunidades(): ?Comunidades
    {
        return $this->comunidades;
    }

    public function setComunidades(?Comunidades $comunidades): self
    {
        $this->comunidades = $comunidades;

        return $this;
    }

    /**
     * @return Collection<int, Municipios>
     */
    public function getProvincias(): Collection
    {
        return $this->provincias;
    }

    public function addProvincia(Municipios $provincia): self
    {
        if (!$this->provincias->contains($provincia)) {
            $this->provincias->add($provincia);
            $provincia->setProvincias($this);
        }

        return $this;
    }

    public function removeProvincia(Municipios $provincia): self
    {
        if ($this->provincias->removeElement($provincia)) {
            // set the owning side to null (unless already changed)
            if ($provincia->getProvincias() === $this) {
                $provincia->setProvincias(null);
            }
        }

        return $this;
    }

}
