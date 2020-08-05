<?php

namespace App\Entity;

use App\Repository\AreasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AreasRepository::class)
 */
class Areas
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
     * @ORM\OneToMany(targetEntity=Offices::class, mappedBy="areas")
     */
    private $offices;

    public function __construct()
    {
        $this->offices = new ArrayCollection();
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
     * @return Collection|Offices[]
     */
    public function getOffices(): Collection
    {
        return $this->offices;
    }

    public function addOffice(Offices $office): self
    {
        if (!$this->offices->contains($office)) {
            $this->offices[] = $office;
            $office->setAreas($this);
        }

        return $this;
    }

    public function removeOffice(Offices $office): self
    {
        if ($this->offices->contains($office)) {
            $this->offices->removeElement($office);
            // set the owning side to null (unless already changed)
            if ($office->getAreas() === $this) {
                $office->setAreas(null);
            }
        }

        return $this;
    }
}
