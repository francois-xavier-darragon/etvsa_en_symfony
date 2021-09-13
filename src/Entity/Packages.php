<?php

namespace App\Entity;

use App\Repository\PackagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PackagesRepository::class)
 */
class Packages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $delivery;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $towns;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=Services::class, inversedBy="package")
     * @ORM\JoinColumn(nullable=false)
     */
    private $services;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDelivery(): ?string
    {
        return $this->delivery;
    }

    public function setDelivery(?string $delivery): self
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function getTowns(): ?string
    {
        return $this->towns;
    }

    public function setTowns(?string $towns): self
    {
        $this->towns = $towns;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getServices(): ?Services
    {
        return $this->services;
    }

    public function setServices(?Services $services): self
    {
        $this->services = $services;

        return $this;
    }
}
