<?php

namespace App\Entity;

use App\Repository\TDomiciliationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TDomiciliationRepository::class)
 */
class TDomiciliation
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
    private $ID_Domiciliation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Domiciliation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDDomiciliation(): ?string
    {
        return $this->ID_Domiciliation;
    }

    public function setIDDomiciliation(string $ID_Domiciliation): self
    {
        $this->ID_Domiciliation = $ID_Domiciliation;

        return $this;
    }

    public function getDomiciliation(): ?string
    {
        return $this->Domiciliation;
    }

    public function setDomiciliation(?string $Domiciliation): self
    {
        $this->Domiciliation = $Domiciliation;

        return $this;
    }
}
