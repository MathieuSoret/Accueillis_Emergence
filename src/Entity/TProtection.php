<?php

namespace App\Entity;

use App\Repository\TProtectionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TProtectionRepository::class)
 */
class TProtection
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
    private $ID_Protection;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Protection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDProtection(): ?string
    {
        return $this->ID_Protection;
    }

    public function setIDProtection(?string $ID_Protection): self
    {
        $this->ID_Protection = $ID_Protection;

        return $this;
    }

    public function getProtection(): ?string
    {
        return $this->Protection;
    }

    public function setProtection(?string $Protection): self
    {
        $this->Protection = $Protection;

        return $this;
    }
}
