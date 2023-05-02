<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Lesson
 *
 * @ORM\Table(name="lesson", indexes={@ORM\Index(name="IDX_F87474F34B30D9C4", columns={"cid"})})
 *@ORM\Entity(repositoryClass="App\Repository\LessonRepository")
=======

/**
 * Lesson
 *
 * @ORM\Table(name="lesson", indexes={@ORM\Index(name="fk_cid", columns={"cid"})})
 * @ORM\Entity
>>>>>>> origin/Event
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
<<<<<<< HEAD
=======
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

    /**
>>>>>>> origin/Event
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=999, nullable=false)
     */
<<<<<<< HEAD
    #[Assert\NotBlank(message:"name is required")]
=======
>>>>>>> origin/Event
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=999, nullable=false)
<<<<<<< HEAD
   
     */
    #[Assert\NotBlank(message:"file is required")]
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

=======
     */
    private $file;

>>>>>>> origin/Event
    public function getLid(): ?int
    {
        return $this->lid;
    }

<<<<<<< HEAD
=======
    public function getCid(): ?int
    {
        return $this->cid;
    }

    public function setCid(int $cid): self
    {
        $this->cid = $cid;

        return $this;
    }

>>>>>>> origin/Event
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

<<<<<<< HEAD
    public function getCid(): ?Course
    {
        return $this->cid;
    }

    public function setCid(?Course $cid): self
    {
        $this->cid = $cid;
        $this->Course = $cid;
        return $this;
    }

=======
>>>>>>> origin/Event

}
