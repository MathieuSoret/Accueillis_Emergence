<?php

namespace App\Entity;

use App\Repository\TPrescripteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TPrescripteurRepository::class)
 */
class TPrescripteur
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
    private $ID_Prescripteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prescripteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDPrescripteur(): ?string
    {
        return $this->ID_Prescripteur;
    }

    public function setIDPrescripteur(string $ID_Prescripteur): self
    {
        $this->ID_Prescripteur = $ID_Prescripteur;

        return $this;
    }

    public function getPrescripteur(): ?string
    {
        return $this->Prescripteur;
    }

    public function setPrescripteur(?string $Prescripteur): self
    {
        $this->Prescripteur = $Prescripteur;

        return $this;
    }
}
