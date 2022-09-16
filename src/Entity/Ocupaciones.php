<?php

namespace App\Entity;

use App\Repository\OcupacionesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OcupacionesRepository::class)]
class Ocupaciones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $CNO = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCNO(): ?int
    {
        return $this->CNO;
    }

    public function setCNO(int $CNO): self
    {
        $this->CNO = $CNO;

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
}
