<?php

namespace App\Entity;

use App\Repository\YearMemoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=YearMemoryRepository::class)
 */
class YearMemory
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

    public function __construct()
    {
        $this->memories = new ArrayCollection();
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
}
