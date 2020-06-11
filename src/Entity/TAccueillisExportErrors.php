<?php

namespace App\Entity;

use App\Repository\TAccueillisExportErrorsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TAccueillisExportErrorsRepository::class)
 */
class TAccueillisExportErrors
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Champ;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Erreur;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ligne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChamp(): ?string
    {
        return $this->Champ;
    }

    public function setChamp(?string $Champ): self
    {
        $this->Champ = $Champ;

        return $this;
    }

    public function getErreur(): ?string
    {
        return $this->Erreur;
    }

    public function setErreur(?string $Erreur): self
    {
        $this->Erreur = $Erreur;

        return $this;
    }

    public function getLigne(): ?string
    {
        return $this->Ligne;
    }

    public function setLigne(?string $Ligne): self
    {
        $this->Ligne = $Ligne;

        return $this;
    }
}
