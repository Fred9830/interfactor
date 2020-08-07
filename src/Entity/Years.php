<?php

namespace App\Entity;

use App\Repository\YearsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=YearsRepository::class)
 */
class Years
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Memories::class, mappedBy="year")
     */
    private $memories;

    /**
     * @ORM\OneToMany(targetEntity=Others::class, mappedBy="year")
     */
    private $others;

    /**
     * @ORM\OneToMany(targetEntity=Statements::class, mappedBy="year")
     */
    private $statements;

    public function __construct()
    {
        $this->memories = new ArrayCollection();
        $this->others = new ArrayCollection();
        $this->statements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Memories[]
     */
    public function getMemories(): Collection
    {
        return $this->memories;
    }

    public function addMemory(Memories $memory): self
    {
        if (!$this->memories->contains($memory)) {
            $this->memories[] = $memory;
            $memory->setYear($this);
        }

        return $this;
    }

    public function removeMemory(Memories $memory): self
    {
        if ($this->memories->contains($memory)) {
            $this->memories->removeElement($memory);
            // set the owning side to null (unless already changed)
            if ($memory->getYear() === $this) {
                $memory->setYear(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Others[]
     */
    public function getOthers(): Collection
    {
        return $this->others;
    }

    public function addOther(Others $other): self
    {
        if (!$this->others->contains($other)) {
            $this->others[] = $other;
            $other->setYear($this);
        }

        return $this;
    }

    public function removeOther(Others $other): self
    {
        if ($this->others->contains($other)) {
            $this->others->removeElement($other);
            // set the owning side to null (unless already changed)
            if ($other->getYear() === $this) {
                $other->setYear(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Statements[]
     */
    public function getStatements(): Collection
    {
        return $this->statements;
    }

    public function addStatement(Statements $statement): self
    {
        if (!$this->statements->contains($statement)) {
            $this->statements[] = $statement;
            $statement->setYear($this);
        }

        return $this;
    }

    public function removeStatement(Statements $statement): self
    {
        if ($this->statements->contains($statement)) {
            $this->statements->removeElement($statement);
            // set the owning side to null (unless already changed)
            if ($statement->getYear() === $this) {
                $statement->setYear(null);
            }
        }

        return $this;
    }
}
