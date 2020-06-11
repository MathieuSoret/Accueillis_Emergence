<?php

namespace App\Entity;

use App\Repository\TSituationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TSituationRepository::class)
 */
class TSituation
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
    private $ID_Situation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Situation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDSituation(): ?string
    {
        return $this->ID_Situation;
    }

    public function setIDSituation(string $ID_Situation): self
    {
        $this->ID_Situation = $ID_Situation;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->Situation;
    }

    public function setSituation(?string $Situation): self
    {
        $this->Situation = $Situation;

        return $this;
    }
}
