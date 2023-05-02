<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Historysearch
 *
 * @ORM\Table(name="historysearch")
 * @ORM\Entity
 */
class Historysearch
{
    /**
     * @var int
     *
     * @ORM\Column(name="searchID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchid;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Search", type="string", length=255, nullable=false)
     */
    private $search;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SearchDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $searchdate = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="resultCount", type="integer", nullable=false)
     */
    private $resultcount;

    /**
     * @var string
     *
     * @ORM\Column(name="resultIDs", type="string", length=255, nullable=false)
     */
    private $resultids;

    public function getSearchid(): ?int
    {
        return $this->searchid;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

<<<<<<< HEAD
    public function etSearchs(string $search): self
=======
    public function setSearch(string $search): self
>>>>>>> origin/Event
    {
        $this->search = $search;

        return $this;
    }

    public function getSearchdate(): ?\DateTimeInterface
    {
        return $this->searchdate;
    }

    public function setSearchdate(\DateTimeInterface $searchdate): self
    {
        $this->searchdate = $searchdate;

        return $this;
    }

    public function getResultcount(): ?int
    {
        return $this->resultcount;
    }

    public function setResultcount(int $resultcount): self
    {
        $this->resultcount = $resultcount;

        return $this;
    }

    public function getResultids(): ?string
    {
        return $this->resultids;
    }

    public function setResultids(string $resultids): self
    {
        $this->resultids = $resultids;

        return $this;
    }


}
