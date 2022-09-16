<?php

namespace App\Entity;

use App\Repository\FamiliasProfesionalesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FamiliasProfesionalesRepository::class)]
class FamiliasProfesionales
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    public function getId(): ?int
    {
        return $this->id;
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
}
