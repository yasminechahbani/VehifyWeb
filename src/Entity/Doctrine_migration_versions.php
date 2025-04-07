<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
class Doctrine_migration_versions
{

    #[ORM\Id]
    #[ORM\Column(type: "string", length: 191)]
    private string $version;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $executed_at;

    #[ORM\Column(type: "integer")]
    private int $execution_time;

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($value)
    {
        $this->version = $value;
    }

    public function getExecuted_at()
    {
        return $this->executed_at;
    }

    public function setExecuted_at($value)
    {
        $this->executed_at = $value;
    }

    public function getExecution_time()
    {
        return $this->execution_time;
    }

    public function setExecution_time($value)
    {
        $this->execution_time = $value;
    }

    public function getExecutedAt(): ?\DateTimeInterface
    {
        return $this->executed_at;
    }

    public function setExecutedAt(\DateTimeInterface $executed_at): static
    {
        $this->executed_at = $executed_at;

        return $this;
    }

    public function getExecutionTime(): ?int
    {
        return $this->execution_time;
    }

    public function setExecutionTime(int $execution_time): static
    {
        $this->execution_time = $execution_time;

        return $this;
    }
}
