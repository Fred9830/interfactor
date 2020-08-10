<?php

namespace App\Entity;

use App\Repository\YearOtherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=YearOtherRepository::class)
 */
class YearOther
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
     * @ORM\OneToMany(targetEntity=Others::class, mappedBy="year")
     */
    private $others;

    public function __construct()
    {
        $this->others = new ArrayCollection();
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
}
