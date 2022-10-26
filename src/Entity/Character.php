<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $maxHealth = null;

    #[ORM\Column]
    private ?int $currentHealth = null;

    #[ORM\Column]
    private ?int $Atk = null;

    #[ORM\Column]
    private ?int $pui = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

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

    public function getMaxHealth(): ?int
    {
        return $this->maxHealth;
    }

    public function setMaxHealth(int $maxHealth): self
    {
        $this->maxHealth = $maxHealth;

        return $this;
    }

    public function getCurrentHealth(): ?int
    {
        return $this->currentHealth;
    }

    public function setCurrentHealth(int $currentHealth): self
    {
        $this->currentHealth = $currentHealth;

        return $this;
    }

    public function getAtk(): ?int
    {
        return $this->Atk;
    }

    public function setAtk(int $Atk): self
    {
        $this->Atk = $Atk;

        return $this;
    }

    public function getPui(): ?int
    {
        return $this->pui;
    }

    public function setPui(int $pui): self
    {
        $this->pui = $pui;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
