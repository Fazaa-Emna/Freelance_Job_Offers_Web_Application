<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * DoctrineMigrationVersions
 *
 * @ORM\Table(name="doctrine_migration_versions")
 * @ORM\Entity
 */
class DoctrineMigrationVersions
{
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=191, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $version;

    /**
     * @var \DateTime|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="executed_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $executedAt = 'NULL';
=======
     * @ORM\Column(name="executed_at", type="datetime", nullable=true)
     */
    private $executedAt;
>>>>>>> origin/Event

    /**
     * @var int|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="execution_time", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $executionTime = NULL;
=======
     * @ORM\Column(name="execution_time", type="integer", nullable=true)
     */
    private $executionTime;
>>>>>>> origin/Event

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function getExecutedAt(): ?\DateTimeInterface
    {
        return $this->executedAt;
    }

    public function setExecutedAt(?\DateTimeInterface $executedAt): self
    {
        $this->executedAt = $executedAt;

        return $this;
    }

    public function getExecutionTime(): ?int
    {
        return $this->executionTime;
    }

    public function setExecutionTime(?int $executionTime): self
    {
        $this->executionTime = $executionTime;

        return $this;
    }


}
