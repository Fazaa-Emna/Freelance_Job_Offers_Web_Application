<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity
 */
class Application
{
    /**
     * @var int
     *
     * @ORM\Column(name="idApp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idapp;

    /**
     * @var int
     *
     * @ORM\Column(name="idFreelance", type="integer", nullable=false)
     */
    private $idfreelance;

    /**
     * @var int
     *
     * @ORM\Column(name="idFreelancer", type="integer", nullable=false)
     */
    private $idfreelancer;

    /**
     * @var int
     *
     * @ORM\Column(name="idBO", type="integer", nullable=false)
     */
    private $idbo;

    /**
     * @var string
     *
     * @ORM\Column(name="FN_Freelancer", type="string", length=255, nullable=false)
     */
    private $fnFreelancer;

    /**
     * @var string
     *
     * @ORM\Column(name="LN_Freelancer", type="string", length=255, nullable=false)
     */
    private $lnFreelancer;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailFreelancer", type="string", length=255, nullable=false)
     */
    private $emailfreelancer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ApplicationDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $applicationdate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="url_CV", type="string", length=255, nullable=false)
     */
    private $urlCv;

    /**
     * @var bool
     *
     * @ORM\Column(name="Confirmation", type="boolean", nullable=false)
     */
    private $confirmation;

    /**
     * @var bool
     *
     * @ORM\Column(name="Notification", type="boolean", nullable=false)
     */
    private $notification;

    public function getIdapp(): ?int
    {
        return $this->idapp;
    }

    public function getIdfreelance(): ?int
    {
        return $this->idfreelance;
    }

    public function setIdfreelance(int $idfreelance): self
    {
        $this->idfreelance = $idfreelance;

        return $this;
    }

    public function getIdfreelancer(): ?int
    {
        return $this->idfreelancer;
    }

    public function setIdfreelancer(int $idfreelancer): self
    {
        $this->idfreelancer = $idfreelancer;

        return $this;
    }

    public function getIdbo(): ?int
    {
        return $this->idbo;
    }

    public function setIdbo(int $idbo): self
    {
        $this->idbo = $idbo;

        return $this;
    }

    public function getFnFreelancer(): ?string
    {
        return $this->fnFreelancer;
    }

    public function setFnFreelancer(string $fnFreelancer): self
    {
        $this->fnFreelancer = $fnFreelancer;

        return $this;
    }

    public function getLnFreelancer(): ?string
    {
        return $this->lnFreelancer;
    }

    public function setLnFreelancer(string $lnFreelancer): self
    {
        $this->lnFreelancer = $lnFreelancer;

        return $this;
    }

    public function getEmailfreelancer(): ?string
    {
        return $this->emailfreelancer;
    }

    public function setEmailfreelancer(string $emailfreelancer): self
    {
        $this->emailfreelancer = $emailfreelancer;

        return $this;
    }

    public function getApplicationdate(): ?\DateTimeInterface
    {
        return $this->applicationdate;
    }

    public function setApplicationdate(\DateTimeInterface $applicationdate): self
    {
        $this->applicationdate = $applicationdate;

        return $this;
    }

    public function getUrlCv(): ?string
    {
        return $this->urlCv;
    }

    public function setUrlCv(string $urlCv): self
    {
        $this->urlCv = $urlCv;

        return $this;
    }

    public function isConfirmation(): ?bool
    {
        return $this->confirmation;
    }

    public function setConfirmation(bool $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function isNotification(): ?bool
    {
        return $this->notification;
    }

    public function setNotification(bool $notification): self
    {
        $this->notification = $notification;

        return $this;
    }


}