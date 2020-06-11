<?php

namespace App\Entity;

use App\Repository\TRessourcesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TRessourcesRepository::class)
 */
class TRessources
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
    private $ID_Ressources;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Ressources;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDRessources(): ?string
    {
        return $this->ID_Ressources;
    }

    public function setIDRessources(string $ID_Ressources): self
    {
        $this->ID_Ressources = $ID_Ressources;

        return $this;
    }

    public function getRessources(): ?string
    {
        return $this->Ressources;
    }

    public function setRessources(?string $Ressources): self
    {
        $this->Ressources = $Ressources;

        return $this;
    }
}
