<?php

namespace App\Entity;

use App\Repository\TSessionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TSessionRepository::class)
 */
class TSession
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
    private $ID_Session;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Session;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Activite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDSession(): ?string
    {
        return $this->ID_Session;
    }

    public function setIDSession(string $ID_Session): self
    {
        $this->ID_Session = $ID_Session;

        return $this;
    }

    public function getDateSession(): ?\DateTimeInterface
    {
        return $this->Date_Session;
    }

    public function setDateSession(?\DateTimeInterface $Date_Session): self
    {
        $this->Date_Session = $Date_Session;

        return $this;
    }

    public function getRefActivite(): ?string
    {
        return $this->Ref_Activite;
    }

    public function setRefActivite(?string $Ref_Activite): self
    {
        $this->Ref_Activite = $Ref_Activite;

        return $this;
    }
}
