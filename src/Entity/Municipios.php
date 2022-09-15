<?php

namespace App\Entity;

use App\Repository\MunicipioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MunicipioRepository::class)]
class Municipios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\OneToMany(mappedBy: 'municipios', targetEntity: Direcciones::class)]
    private Collection $municipios;

    public function __construct()
    {
        $this->provincias = new ArrayCollection();
        $this->municipios = new ArrayCollection();
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

    /**
     * @return Collection<int, Direcciones>
     */
    public function getMunicipios(): Collection
    {
        return $this->municipios;
    }

    public function addMunicipio(Direcciones $municipio): self
    {
        if (!$this->municipios->contains($municipio)) {
            $this->municipios->add($municipio);
            $municipio->setMunicipios($this);
        }

        return $this;
    }

    public function removeMunicipio(Direcciones $municipio): self
    {
        if ($this->municipios->removeElement($municipio)) {
            // set the owning side to null (unless already changed)
            if ($municipio->getMunicipios() === $this) {
                $municipio->setMunicipios(null);
            }
        }

        return $this;
    }
}
