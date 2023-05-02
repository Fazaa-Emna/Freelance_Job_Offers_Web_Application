<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
=======
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

>>>>>>> origin/Event
/**
 * Course
 *
 * @ORM\Table(name="course")
<<<<<<< HEAD
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
=======
 * @ORM\Entity
>>>>>>> origin/Event
 */
class Course
{
    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;
 /**
     * @ORM\OneToMany(targetEntity="Lesson", mappedBy="course")
     */
    private $lessons;
    public function __toString() {
        return $this->cid;
}
    public function __construct()
    {
        $this->lessons = new ArrayCollection();
    }

    public function getLessons(): Collection
    {
        return new ArrayCollection($this->lessons->getValues());
    }

    
    public function addLesson(Lesson $lesson): self
    {
        if (!$this->lessons->contains($lesson)) {
            $this->lessons[] = $lesson;
            $lesson->setCourse($this);
        }

        return $this;
    }

    public function removeLesson(Lesson $lesson): self
    {
        if ($this->lessons->contains($lesson)) {
            $this->lessons->removeElement($lesson);
            // set the owning side to null (unless already changed)
            if ($lesson->getCourse() === $this) {
                $lesson->setCourse(null);
            }
        }

        return $this;
    }
=======
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     */
    private $cid;

>>>>>>> origin/Event
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=1000, nullable=false)
     */
<<<<<<< HEAD
    #[Assert\NotBlank(message:"Title is required")]
=======
>>>>>>> origin/Event
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
<<<<<<< HEAD
     * 
     */
    #[Assert\NotBlank(message:"description is required")]

=======
     */
>>>>>>> origin/Event
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
<<<<<<< HEAD
    
=======
>>>>>>> origin/Event
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=999, nullable=false)
     */
<<<<<<< HEAD
    #[Assert\NotBlank(message:"category is required")]
=======
>>>>>>> origin/Event
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=999, nullable=false)
     */
    private $photo;

<<<<<<< HEAD
=======
    public function getId(): ?int
    {
        return $this->id;
    }

>>>>>>> origin/Event
    public function getCid(): ?int
    {
        return $this->cid;
    }

<<<<<<< HEAD
=======
    public function setCid(int $cid): self
    {
        $this->cid = $cid;

        return $this;
    }

>>>>>>> origin/Event
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }


}
