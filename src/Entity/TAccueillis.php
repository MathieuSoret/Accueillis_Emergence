<?php

namespace App\Entity;

use App\Repository\TAccueillisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TAccueillisRepository::class)
 */
class TAccueillis
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
    private $ID_Accueilli;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $Qualite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Naissance;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Ville_Naissance;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $Ref_Nationalite;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Arrivee;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Prescripteur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Isole;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Accueilli_Famille;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $Sexe;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Adulte;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $actif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDAccueilli(): ?string
    {
        return $this->ID_Accueilli;
    }

    public function setIDAccueilli(string $ID_Accueilli): self
    {
        $this->ID_Accueilli = $ID_Accueilli;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->Qualite;
    }

    public function setQualite(?string $Qualite): self
    {
        $this->Qualite = $Qualite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->Date_Naissance;
    }

    public function setDateNaissance(?\DateTimeInterface $Date_Naissance): self
    {
        $this->Date_Naissance = $Date_Naissance;

        return $this;
    }

    public function getVilleNaissance(): ?string
    {
        return $this->Ville_Naissance;
    }

    public function setVilleNaissance(?string $Ville_Naissance): self
    {
        $this->Ville_Naissance = $Ville_Naissance;

        return $this;
    }

    public function getRefNationalite(): ?string
    {
        return $this->Ref_Nationalite;
    }

    public function setRefNationalite(?string $Ref_Nationalite): self
    {
        $this->Ref_Nationalite = $Ref_Nationalite;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->Date_Arrivee;
    }

    public function setDateArrivee(?\DateTimeInterface $Date_Arrivee): self
    {
        $this->Date_Arrivee = $Date_Arrivee;

        return $this;
    }

    public function getRefPrescripteur(): ?string
    {
        return $this->Ref_Prescripteur;
    }

    public function setRefPrescripteur(?string $Ref_Prescripteur): self
    {
        $this->Ref_Prescripteur = $Ref_Prescripteur;

        return $this;
    }

    public function getIsole(): ?bool
    {
        return $this->Isole;
    }

    public function setIsole(?bool $Isole): self
    {
        $this->Isole = $Isole;

        return $this;
    }

    public function getRefAccueilliFamille(): ?string
    {
        return $this->Ref_Accueilli_Famille;
    }

    public function setRefAccueilliFamille(?string $Ref_Accueilli_Famille): self
    {
        $this->Ref_Accueilli_Famille = $Ref_Accueilli_Famille;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(?string $Sexe): self
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getAdulte(): ?bool
    {
        return $this->Adulte;
    }

    public function setAdulte(?bool $Adulte): self
    {
        $this->Adulte = $Adulte;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(?bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }
}
