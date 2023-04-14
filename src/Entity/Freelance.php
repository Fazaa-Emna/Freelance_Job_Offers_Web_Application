<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Freelance
 *
 * @ORM\Table(name="freelance")
 * @ORM\Entity
 */
class Freelance
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFreelance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfreelance;

    /**
     * @var int
     *
     * @ORM\Column(name="idBO", type="integer", nullable=false)
     */
    private $idbo;

    /**
     * @var string
     *
     * @ORM\Column(name="emailBO", type="string", length=255, nullable=false)
     */
    private $emailbo;

    /**
     * @var string
     *
     * @ORM\Column(name="category_F", type="text", length=65535, nullable=false)
     */
    private $categoryF;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=false)
     */
    private $budget;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="AddDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $adddate;

    /**
     * @var string
     *
     * @ORM\Column(name="urlLogo", type="string", length=255, nullable=false)
     */
    private $urllogo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbApplicants", type="integer", nullable=true)
     */
    private $nbapplicants;

    public function getIdfreelance(): ?int
    {
        return $this->idfreelance;
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

    public function getEmailbo(): ?string
    {
        return $this->emailbo;
    }

    public function setEmailbo(string $emailbo): self
    {
        $this->emailbo = $emailbo;

        return $this;
    }

    public function getCategoryF(): ?string
    {
        return $this->categoryF;
    }

    public function setCategoryF(string $categoryF): self
    {
        $this->categoryF = $categoryF;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function isState(): ?bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getAdddate(): ?\DateTimeInterface
    {
        return $this->adddate;
    }

    public function setAdddate(\DateTimeInterface $adddate): self
    {
        $this->adddate = $adddate;

        return $this;
    }

    public function getUrllogo(): ?string
    {
        return $this->urllogo;
    }

    public function setUrllogo(string $urllogo): self
    {
        $this->urllogo = $urllogo;

        return $this;
    }

    public function getNbapplicants(): ?int
    {
        return $this->nbapplicants;
    }

    public function setNbapplicants(?int $nbapplicants): self
    {
        $this->nbapplicants = $nbapplicants;

        return $this;
    }


}
