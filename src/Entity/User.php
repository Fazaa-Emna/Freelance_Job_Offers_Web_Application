<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=55, nullable=false)
     */
    private $role;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="date", nullable=false)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="isVerified", type="date", nullable=false)
     */
    private $isverified;

    /**
     * @var int
     *
     * @ORM\Column(name="isBanned", type="integer", nullable=false)
     */
    private $isbanned;

    /**
     * @var int
     *
     * @ORM\Column(name="isConnected", type="integer", nullable=false)
     */
    private $isconnected;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getIsverified(): ?\DateTimeInterface
    {
        return $this->isverified;
    }

    public function setIsverified(\DateTimeInterface $isverified): self
    {
        $this->isverified = $isverified;

        return $this;
    }

    public function getIsbanned(): ?int
    {
        return $this->isbanned;
    }

    public function setIsbanned(int $isbanned): self
    {
        $this->isbanned = $isbanned;

        return $this;
    }

    public function getIsconnected(): ?int
    {
        return $this->isconnected;
    }

    public function setIsconnected(int $isconnected): self
    {
        $this->isconnected = $isconnected;

        return $this;
    }


}
