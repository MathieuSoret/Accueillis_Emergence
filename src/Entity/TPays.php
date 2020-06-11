<?php

namespace App\Entity;

use App\Repository\TPaysRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TPaysRepository::class)
 */
class TPays
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $ID_Pays;

    /**
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    private $Pays;

    /**
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    private $Groupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDPays(): ?string
    {
        return $this->ID_Pays;
    }

    public function setIDPays(string $ID_Pays): self
    {
        $this->ID_Pays = $ID_Pays;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->Pays;
    }

    public function setPays(?string $Pays): self
    {
        $this->Pays = $Pays;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->Groupe;
    }

    public function setGroupe(?string $Groupe): self
    {
        $this->Groupe = $Groupe;

        return $this;
    }
}
