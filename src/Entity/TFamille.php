<?php

namespace App\Entity;

use App\Repository\TFamilleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TFamilleRepository::class)
 */
class TFamille
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
    private $ID_Famille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Famille;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Observation;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $diff;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDFamille(): ?string
    {
        return $this->ID_Famille;
    }

    public function setIDFamille(string $ID_Famille): self
    {
        $this->ID_Famille = $ID_Famille;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->Famille;
    }

    public function setFamille(?string $Famille): self
    {
        $this->Famille = $Famille;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->Observation;
    }

    public function setObservation(?string $Observation): self
    {
        $this->Observation = $Observation;

        return $this;
    }

    public function getDiff(): ?string
    {
        return $this->diff;
    }

    public function setDiff(?string $diff): self
    {
        $this->diff = $diff;

        return $this;
    }
}
