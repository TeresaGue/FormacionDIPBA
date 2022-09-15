<?php

namespace App\Entity;

use App\Repository\DireccionesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DireccionesRepository::class)]
class Direcciones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre_via = null;

    #[ORM\Column]
    private ?int $Numero = null;

    #[ORM\Column(length: 10)]
    private ?string $Bloque = null;

    #[ORM\Column(nullable: true)]
    private ?int $Piso = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $Puerta = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $Escalera = null;

    #[ORM\Column]
    private ?int $Codigo_postal = null;

    #[ORM\ManyToMany(targetEntity: Personas::class)]
    private Collection $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreVia(): ?string
    {
        return $this->Nombre_via;
    }

    public function setNombreVia(string $Nombre_via): self
    {
        $this->Nombre_via = $Nombre_via;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->Numero;
    }

    public function setNumero(int $Numero): self
    {
        $this->Numero = $Numero;

        return $this;
    }

    public function getBloque(): ?string
    {
        return $this->Bloque;
    }

    public function setBloque(string $Bloque): self
    {
        $this->Bloque = $Bloque;

        return $this;
    }

    public function getPiso(): ?int
    {
        return $this->Piso;
    }

    public function setPiso(?int $Piso): self
    {
        $this->Piso = $Piso;

        return $this;
    }

    public function getPuerta(): ?string
    {
        return $this->Puerta;
    }

    public function setPuerta(?string $Puerta): self
    {
        $this->Puerta = $Puerta;

        return $this;
    }

    public function getEscalera(): ?string
    {
        return $this->Escalera;
    }

    public function setEscalera(?string $Escalera): self
    {
        $this->Escalera = $Escalera;

        return $this;
    }

    public function getCodigoPostal(): ?int
    {
        return $this->Codigo_postal;
    }

    public function setCodigoPostal(int $Codigo_postal): self
    {
        $this->Codigo_postal = $Codigo_postal;

        return $this;
    }

    /**
     * @return Collection<int, Personas>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(Personas $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
        }

        return $this;
    }

    public function removeRelation(Personas $relation): self
    {
        $this->relation->removeElement($relation);

        return $this;
    }
}
