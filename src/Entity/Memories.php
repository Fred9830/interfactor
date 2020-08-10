<?php

namespace App\Entity;

use App\Repository\MemoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MemoriesRepository::class)
 */
class Memories
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
     * @ORM\Column(type="string", length=100)
     */
    private $archive;

    /**
     * @ORM\ManyToOne(targetEntity=YearMemory::class, inversedBy="memories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $year;

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

    public function getArchive(): ?string
    {
        return $this->archive;
    }

    public function setArchive(string $archive): self
    {
        $this->archive = $archive;

        return $this;
    }

    public function getYear(): ?YearMemory
    {
        return $this->year;
    }

    public function setYear(?YearMemory $year): self
    {
        $this->year = $year;

        return $this;
    }

}
