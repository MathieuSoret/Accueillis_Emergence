<?php

namespace App\Entity;

use App\Repository\TSanteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TSanteRepository::class)
 */
class TSante
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $ID_Sante;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Droit_Sante;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDSante(): ?string
    {
        return $this->ID_Sante;
    }

    public function setIDSante(string $ID_Sante): self
    {
        $this->ID_Sante = $ID_Sante;

        return $this;
    }

    public function getDroitSante(): ?string
    {
        return $this->Droit_Sante;
    }

    public function setDroitSante(?string $Droit_Sante): self
    {
        $this->Droit_Sante = $Droit_Sante;

        return $this;
    }
}
