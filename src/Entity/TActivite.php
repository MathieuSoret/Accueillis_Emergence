<?php

namespace App\Entity;

use App\Repository\TActiviteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TActiviteRepository::class)
 */
class TActivite
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
    private $ID_Activite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Activite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $D_Activite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDActivite(): ?string
    {
        return $this->ID_Activite;
    }

    public function setIDActivite(string $ID_Activite): self
    {
        $this->ID_Activite = $ID_Activite;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->Activite;
    }

    public function setActivite(?string $Activite): self
    {
        $this->Activite = $Activite;

        return $this;
    }

    public function getDActivite(): ?string
    {
        return $this->D_Activite;
    }

    public function setDActivite(?string $D_Activite): self
    {
        $this->D_Activite = $D_Activite;

        return $this;
    }
}
