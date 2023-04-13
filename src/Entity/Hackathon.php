<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Event;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Hackathon
 *
 * @ORM\Table(name="hackathon")
 * @ORM\Entity
 */
class Hackathon
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="submissionDeadline", type="date", nullable=false)
     * @Assert\NotNull(message="Submission deadline is required.")
     * @Assert\GreaterThan("today", message="Submission deadline must be a future date.")
     */
    private $submissiondeadline;

    /**
     * @var string
     *
     * @ORM\Column(name="prizes", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Prizes field cannot be blank.")
     * @Assert\Length(
     *      max = 255,
     *      maxMessage = "Prizes field cannot be longer than {{ limit }} characters."
     * )
     */
    private $prizes;

    /**
     * @var \Event
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;

    public function getSubmissiondeadline(): ?\DateTimeInterface
    {
        return $this->submissiondeadline;
    }

    public function setSubmissiondeadline(\DateTimeInterface $submissiondeadline): self
    {
        $this->submissiondeadline = $submissiondeadline;

        return $this;
    }

    public function getPrizes(): ?string
    {
        return $this->prizes;
    }

    public function setPrizes(string $prizes): self
    {
        $this->prizes = $prizes;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }


}
