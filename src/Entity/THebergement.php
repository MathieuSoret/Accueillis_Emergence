<?php

namespace App\Entity;

use App\Repository\THebergementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=THebergementRepository::class)
 */
class THebergement
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
    private $ID_Hebergement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Hebergement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDHebergement(): ?string
    {
        return $this->ID_Hebergement;
    }

    public function setIDHebergement(string $ID_Hebergement): self
    {
        $this->ID_Hebergement = $ID_Hebergement;

        return $this;
    }

    public function getHebergement(): ?string
    {
        return $this->Hebergement;
    }

    public function setHebergement(?string $Hebergement): self
    {
        $this->Hebergement = $Hebergement;

        return $this;
    }
}
