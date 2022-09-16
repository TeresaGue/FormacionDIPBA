<?php

namespace App\Entity;

use App\Repository\CertificadosProfesionalidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificadosProfesionalidadRepository::class)]
class CertificadosProfesionalidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Horas_form = null;

    #[ORM\Column]
    private ?int $Horas_pract = null;

    #[ORM\Column]
    private ?int $Nivel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHorasForm(): ?int
    {
        return $this->Horas_form;
    }

    public function setHorasForm(int $Horas_form): self
    {
        $this->Horas_form = $Horas_form;

        return $this;
    }

    public function getHorasPract(): ?int
    {
        return $this->Horas_pract;
    }

    public function setHorasPract(int $Horas_pract): self
    {
        $this->Horas_pract = $Horas_pract;

        return $this;
    }

    public function getNivel(): ?int
    {
        return $this->Nivel;
    }

    public function setNivel(int $Nivel): self
    {
        $this->Nivel = $Nivel;

        return $this;
    }
}
