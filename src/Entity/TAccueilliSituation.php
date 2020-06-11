<?php

namespace App\Entity;

use App\Repository\TAccueilliSituationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TAccueilliSituationRepository::class)
 */
class TAccueilliSituation
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
    private $ID_Accueilli_Situation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_situation;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Accueilli;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Hebergement;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Domiciliation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Actuel;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Administrative;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Protection;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Gestionnaire;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Suivi_Social;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Suivi_Observations;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Ref_Sante;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Appel_115;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Appel_Observations;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Mobilite_Reduite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Animal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Animal_Observations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Observations;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDAccueilliSituation(): ?string
    {
        return $this->ID_Accueilli_Situation;
    }

    public function setIDAccueilliSituation(string $ID_Accueilli_Situation): self
    {
        $this->ID_Accueilli_Situation = $ID_Accueilli_Situation;

        return $this;
    }

    public function getDateSituation(): ?\DateTimeInterface
    {
        return $this->Date_situation;
    }

    public function setDateSituation(?\DateTimeInterface $Date_situation): self
    {
        $this->Date_situation = $Date_situation;

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

    public function getRefHebergement(): ?string
    {
        return $this->Ref_Hebergement;
    }

    public function setRefHebergement(?string $Ref_Hebergement): self
    {
        $this->Ref_Hebergement = $Ref_Hebergement;

        return $this;
    }

    public function getRefDomiciliation(): ?string
    {
        return $this->Ref_Domiciliation;
    }

    public function setRefDomiciliation(?string $Ref_Domiciliation): self
    {
        $this->Ref_Domiciliation = $Ref_Domiciliation;

        return $this;
    }

    public function getActuel(): ?bool
    {
        return $this->Actuel;
    }

    public function setActuel(?bool $Actuel): self
    {
        $this->Actuel = $Actuel;

        return $this;
    }

    public function getRefAdministrative(): ?string
    {
        return $this->Ref_Administrative;
    }

    public function setRefAdministrative(?string $Ref_Administrative): self
    {
        $this->Ref_Administrative = $Ref_Administrative;

        return $this;
    }

    public function getRefProtection(): ?string
    {
        return $this->Ref_Protection;
    }

    public function setRefProtection(?string $Ref_Protection): self
    {
        $this->Ref_Protection = $Ref_Protection;

        return $this;
    }

    public function getGestionnaire(): ?string
    {
        return $this->Gestionnaire;
    }

    public function setGestionnaire(?string $Gestionnaire): self
    {
        $this->Gestionnaire = $Gestionnaire;

        return $this;
    }

    public function getSuiviSocial(): ?bool
    {
        return $this->Suivi_Social;
    }

    public function setSuiviSocial(?bool $Suivi_Social): self
    {
        $this->Suivi_Social = $Suivi_Social;

        return $this;
    }

    public function getSuiviObservations(): ?string
    {
        return $this->Suivi_Observations;
    }

    public function setSuiviObservations(?string $Suivi_Observations): self
    {
        $this->Suivi_Observations = $Suivi_Observations;

        return $this;
    }

    public function getRefSante(): ?string
    {
        return $this->Ref_Sante;
    }

    public function setRefSante(?string $Ref_Sante): self
    {
        $this->Ref_Sante = $Ref_Sante;

        return $this;
    }

    public function getAppel115(): ?bool
    {
        return $this->Appel_115;
    }

    public function setAppel115(?bool $Appel_115): self
    {
        $this->Appel_115 = $Appel_115;

        return $this;
    }

    public function getAppelObservations(): ?string
    {
        return $this->Appel_Observations;
    }

    public function setAppelObservations(?string $Appel_Observations): self
    {
        $this->Appel_Observations = $Appel_Observations;

        return $this;
    }

    public function getMobiliteReduite(): ?bool
    {
        return $this->Mobilite_Reduite;
    }

    public function setMobiliteReduite(?bool $Mobilite_Reduite): self
    {
        $this->Mobilite_Reduite = $Mobilite_Reduite;

        return $this;
    }

    public function getAnimal(): ?bool
    {
        return $this->Animal;
    }

    public function setAnimal(?bool $Animal): self
    {
        $this->Animal = $Animal;

        return $this;
    }

    public function getAnimalObservations(): ?string
    {
        return $this->Animal_Observations;
    }

    public function setAnimalObservations(string $Animal_Observations): self
    {
        $this->Animal_Observations = $Animal_Observations;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->Observations;
    }

    public function setObservations(?string $Observations): self
    {
        $this->Observations = $Observations;

        return $this;
    }
}
