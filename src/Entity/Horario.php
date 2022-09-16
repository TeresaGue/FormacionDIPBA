<?php

namespace App\Entity;

use App\Repository\HorarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorarioRepository::class)]
class Horario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Horas = null;

    #[ORM\Column]
    private ?int $Id_modulos = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdModulos(): ?int
    {
        return $this->Id_modulos;
    }

    public function setIdModulos(int $Id_modulos): self
    {
        $this->Id_modulos = $Id_modulos;

        return $this;
    }
}
