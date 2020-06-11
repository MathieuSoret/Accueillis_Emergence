<?php

namespace App\Entity;

use App\Repository\TPresentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TPresentsRepository::class)
 */
class TPresents
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
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Session;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Activite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Activite;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Accueilli;

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
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Session;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_Naissance;

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
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    private $Pays;

    /**
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    private $Groupe;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $Sexe;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Adulte;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Accueilli_Famille;

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

    public function getActivite(): ?string
    {
        return $this->Activite;
    }

    public function setActivite(?string $Activite): self
    {
        $this->Activite = $Activite;

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

    public function getRefSession(): ?string
    {
        return $this->Ref_Session;
    }

    public function setRefSession(?string $Ref_Session): self
    {
        $this->Ref_Session = $Ref_Session;

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

    public function getRefAccueilliFamille(): ?string
    {
        return $this->Ref_Accueilli_Famille;
    }

    public function setRefAccueilliFamille(?string $Ref_Accueilli_Famille): self
    {
        $this->Ref_Accueilli_Famille = $Ref_Accueilli_Famille;

        return $this;
    }
}
