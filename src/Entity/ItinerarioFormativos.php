<?php

namespace App\Entity;

use App\Repository\ItinerarioFormativosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItinerarioFormativosRepository::class)]
class ItinerarioFormativos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Denominacion = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?CriteriosSeleccion $criterios = null;

    #[ORM\ManyToOne(inversedBy: 'relation2')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ModulosPropios $modulospropios = null;
   
    #[ORM\OneToMany(mappedBy: 'itinerarioFormativos', targetEntity: Subplanes::class)]
    private Collection $relation;

    #[ORM\ManyToOne(inversedBy: 'relation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CertificadosProfesionalidad $certificadosProfesionalidad = null;

   public function __construct()
   {
    $this->relation= new ArrayCollection();
   }

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

    public function getItinerario(): ?CriteriosSeleccion
    {
        return $this->itinerario;
    }

    public function setItinerario(CriteriosSeleccion $itinerario): self
    {
        $this->itinerario = $itinerario;

        return $this;
    }

    public function getModulosPropios(): ?ModulosPropios
    {
        return $this->modulosPropios;
    }

    public function setModulosPropios(?ModulosPropios $modulosPropios): self
    {
        $this->modulosPropios = $modulosPropios;

        return $this;
    }

    public function getCertificadosProfesionalidad(): ?CertificadosProfesionalidad
    {
        return $this->certificadosProfesionalidad;
    }

    public function setCertificadosProfesionalidad(?CertificadosProfesionalidad $certificadosProfesionalidad): self
    {
        $this->certificadosProfesionalidad = $certificadosProfesionalidad;

        return $this;
    }
}
