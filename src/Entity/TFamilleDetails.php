<?php

namespace App\Entity;

use App\Repository\TFamilleDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TFamilleDetailsRepository::class)
 */
class TFamilleDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Famille_Details;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Famille;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Accueilli;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Lien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefFamilleDetails(): ?string
    {
        return $this->Ref_Famille_Details;
    }

    public function setRefFamilleDetails(?string $Ref_Famille_Details): self
    {
        $this->Ref_Famille_Details = $Ref_Famille_Details;

        return $this;
    }

    public function getRefFamille(): ?string
    {
        return $this->Ref_Famille;
    }

    public function setRefFamille(?string $Ref_Famille): self
    {
        $this->Ref_Famille = $Ref_Famille;

        return $this;
    }

    public function getRefAccueilli(): ?string
    {
        return $this->Ref_Accueilli;
    }

    public function setRefAccueilli(?string $Ref_Accueilli): self
    {
        $this->Ref_Accueilli = $Ref_Accueilli;

        return $this;
    }

    public function getRefLien(): ?string
    {
        return $this->Ref_Lien;
    }

    public function setRefLien(?string $Ref_Lien): self
    {
        $this->Ref_Lien = $Ref_Lien;

        return $this;
    }
}
