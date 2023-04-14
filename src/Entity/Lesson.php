<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 *
 * @ORM\Table(name="lesson", indexes={@ORM\Index(name="IDX_F87474F34B30D9C4", columns={"cid"})})
 *@ORM\Entity(repositoryClass="App\Repository\LessonRepository")
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

    /**
     * @var \Course
     *
     * @ORM\ManyToOne(targetEntity="Course")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cid", referencedColumnName="cid")
     * })
     */
    private $cid;

    public function getLid(): ?int
    {
        return $this->lid;
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

    public function getCid(): ?Course
    {
        return $this->cid;
    }

    public function setCid(?Course $cid): self
    {
        $this->cid = $cid;

        return $this;
    }


}
