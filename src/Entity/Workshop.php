<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Workshop
 *
 * @ORM\Table(name="workshop")
 * @ORM\Entity
 */
class Workshop
{
    /**
     * @var string
     *
     * @ORM\Column(name="agenda", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Agenda is required")
     * @Assert\Length(max=255, maxMessage="Agenda cannot be longer than 255 characters")
     */
    private $agenda;

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

    public function getAgenda(): ?string
    {
        return $this->agenda;
    }

    public function setAgenda(string $agenda): self
    {
        $this->agenda = $agenda;

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
