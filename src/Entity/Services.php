<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicesRepository::class)
 */
class Services
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=packages::class, mappedBy="services")
     */
    private $package;

    public function __construct()
    {
        $this->package = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getname(): ?string
    {
        return $this->name;
    }

    public function setname(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|packages[]
     */
    public function getPackage(): Collection
    {
        return $this->package;
    }

    public function addPackage(packages $package): self
    {
        if (!$this->package->contains($package)) {
            $this->package[] = $package;
            $package->setServices($this);
        }

        return $this;
    }

    public function removePackage(packages $package): self
    {
        if ($this->package->removeElement($package)) {
            // set the owning side to null (unless already changed)
            if ($package->getServices() === $this) {
                $package->setServices(null);
            }
        }

        return $this;
    }
}
