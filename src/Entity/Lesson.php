<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 *
 * @ORM\Table(name="lesson", indexes={@ORM\Index(name="fk_cid", columns={"cid"})})
 * @ORM\Entity
 */
class Lesson
{
    /**
     * @var int
     *
     * @ORM\Column(name="lid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lid;

    /**
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=999, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=999, nullable=false)
     */
    private $file;

    public function getLid(): ?int
    {
        return $this->lid;
    }

    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function setCid(int $cid): self
    {
        $this->cid = $cid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }


}
