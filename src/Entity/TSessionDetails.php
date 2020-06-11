<?php

namespace App\Entity;

use App\Repository\TSessionDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TSessionDetailsRepository::class)
 */
class TSessionDetails
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
    private $ID_Detail_Session;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Session;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Accueilli;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDDetailSession(): ?string
    {
        return $this->ID_Detail_Session;
    }

    public function setIDDetailSession(string $ID_Detail_Session): self
    {
        $this->ID_Detail_Session = $ID_Detail_Session;

        return $this;
    }

    public function getRefSession(): ?string
    {
        return $this->Ref_Session;
    }

    public function setRefSession(?string $Ref_Session): self
    {
        $this->Ref_Session = $Ref_Session;

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
}
