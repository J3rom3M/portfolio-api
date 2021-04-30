<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProfileRepository::class)
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("profiles_get")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("profiles_get")
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("profiles_get")
     * @Assert\NotBlank()
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("profiles_get")
     * @Assert\NotBlank()
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("profiles_get")
     * @Assert\NotBlank()
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("profiles_get")
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\Column(type="array")
     * @Groups("profiles_get")
     * @Assert\NotBlank()
     */
    private $diplomas = [];

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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDiplomas(): ?array
    {
        return $this->diplomas;
    }

    public function setDiplomas(array $diplomas): self
    {
        $this->diplomas = $diplomas;

        return $this;
    }
}
