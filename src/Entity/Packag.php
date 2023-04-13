<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packag
 *
 * @ORM\Table(name="packag", indexes={@ORM\Index(name="fksid", columns={"sid"})})
 * @ORM\Entity
 */
class Packag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idP;

    /**
     * @var int
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function getSid(): ?int
    {
        return $this->sid;
    }

    public function setSid(int $sid): self
    {
        $this->sid = $sid;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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


}
