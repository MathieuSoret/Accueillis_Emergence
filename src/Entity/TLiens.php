<?php

namespace App\Entity;

use App\Repository\TLiensRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TLiensRepository::class)
 */
class TLiens
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
    private $ID_Lien;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Lien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDLien(): ?string
    {
        return $this->ID_Lien;
    }

    public function setIDLien(string $ID_Lien): self
    {
        $this->ID_Lien = $ID_Lien;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->Lien;
    }

    public function setLien(?string $Lien): self
    {
        $this->Lien = $Lien;

        return $this;
    }
}
