<?php

namespace App\Entity;

use App\Repository\YearStateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=YearStateRepository::class)
 */
class YearState
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
     * @ORM\OneToMany(targetEntity=Statements::class, mappedBy="year")
     */
    private $statements;

    public function __construct()
    {
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
