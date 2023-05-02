<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="id_blog", columns={"id_blog"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var int
     *
     * @ORM\Column(name="id_blog", type="integer", nullable=false)
     */
    private $idBlog;

    public function getIdComment(): ?int
    {
        return $this->idComment;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getIdBlog(): ?int
    {
        return $this->idBlog;
    }

    public function setIdBlog(int $idBlog): self
    {
        $this->idBlog = $idBlog;

        return $this;
    }


}
