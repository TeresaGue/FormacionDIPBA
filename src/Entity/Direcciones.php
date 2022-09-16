<?php

namespace App\Entity;

use App\Repository\DireccionesRepository;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Bloque = null;

    #[ORM\Column(nullable: true)]
    private ?int $Piso = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Puerta = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Escalera = null;

    #[ORM\Column]
    private ?int $Cp = null;

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

    public function setBloque(?string $Bloque): self
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

    public function getCp(): ?int
    {
        return $this->Cp;
    }

    public function setCp(int $Cp): self
    {
        $this->Cp = $Cp;

        return $this;
    }
}
