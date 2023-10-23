<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    /** 
     * assert\length(
     * min: 3, 
     * max: 255,
     * minMessage = "Le fullName doit contenir au moins 5 caractères",
     * maxMessage = "Le fullName ne peut pas dépasser 255 caractères")
     */
    private ?string $fullName = null;

    #[ORM\Column(length: 255, nullable: true)]
    /** 
     * assert\length(
     * min: 3, 
     * max: 255,
     * minMessage = "Le role doit contenir au moins 5 caractères",
     * maxMessage = "Le role ne peut pas dépasser 255 caractères")
     */
    private ?string $role = null;

    #[ORM\Column]
    private ?bool $isAdmin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->roe = $role;

        return $this;
    }

    public function isIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): static
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }
}
