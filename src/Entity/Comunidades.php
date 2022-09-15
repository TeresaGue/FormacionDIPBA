<?php

namespace App\Entity;

use App\Repository\ComunidadesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComunidadesRepository::class)]
class Comunidades
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\OneToMany(mappedBy: 'comunidades', targetEntity: Provincias::class)]
    private Collection $comunidades;

    public function __construct()
    {
        $this->comunidades = new ArrayCollection();
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
     * @return Collection<int, Provincias>
     */
    public function getComunidades(): Collection
    {
        return $this->comunidades;
    }

    public function addComunidade(Provincias $comunidade): self
    {
        if (!$this->comunidades->contains($comunidade)) {
            $this->comunidades->add($comunidade);
            $comunidade->setComunidades($this);
        }

        return $this;
    }

    public function removeComunidade(Provincias $comunidade): self
    {
        if ($this->comunidades->removeElement($comunidade)) {
            // set the owning side to null (unless already changed)
            if ($comunidade->getComunidades() === $this) {
                $comunidade->setComunidades(null);
            }
        }

        return $this;
    }
}
