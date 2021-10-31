<?php

namespace App\Entity;

use App\Repository\AuthorProfileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuthorProfileRepository::class)
 */
class AuthorProfile
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
    private $authFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authLastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authUserName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authPassword;

    /**
     * @ORM\Column(type="boolean", nullable=true , options={"default":false})
     */
    private $ban_status;

    /**
     * @ORM\Column(type="boolean", nullable=true , options={"default":false})
     */
    private $admin_status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthFirstName(): ?string
    {
        return $this->authFirstName;
    }

    public function setAuthFirstName(string $authFirstName): self
    {
        $this->authFirstName = $authFirstName;

        return $this;
    }

    public function getAuthLastName(): ?string
    {
        return $this->authLastName;
    }

    public function setAuthLastName(string $authLastName): self
    {
        $this->authLastName = $authLastName;

        return $this;
    }

    public function getAuthUserName(): ?string
    {
        return $this->authUserName;
    }

    public function setAuthUserName(string $authUserName): self
    {
        $this->authUserName = $authUserName;

        return $this;
    }

    public function getAuthEmail(): ?string
    {
        return $this->authEmail;
    }

    public function setAuthEmail(string $authEmail): self
    {
        $this->authEmail = $authEmail;

        return $this;
    }

    public function getAuthPassword(): ?string
    {
        return $this->authPassword;
    }

    public function setAuthPassword(string $authPassword): self
    {
        $this->authPassword = $authPassword;

        return $this;
    }

    public function getBanStatus(): ?bool
    {
        return $this->ban_status;
    }

    public function setBanStatus(bool $ban_status): self
    {
        $this->ban_status = $ban_status;

        return $this;
    }

    public function getAdminStatus(): ?bool
    {
        return $this->admin_status;
    }

    public function setAdminStatus(bool $admin_status): self
    {
        $this->admin_status = $admin_status;

        return $this;
    }
}