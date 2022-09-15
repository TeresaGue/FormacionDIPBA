<?php

namespace App\Entity;

use App\Repository\ProvinciasRepository;
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

}
