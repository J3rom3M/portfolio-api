<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProjectsRepository::class)
 */
class Projects
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("projects_get")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("projects_get")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("projects_get")
     */
    private $content;

    /**
     * @ORM\ManyToMany(targetEntity=Technos::class, inversedBy="projects")
     * @Groups("projects_get")
     */
    private $technos;

    public function __construct()
    {
        $this->technos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection|Technos[]
     */
    public function getTechnos(): Collection
    {
        return $this->technos;
    }

    public function addTechno(Technos $techno): self
    {
        if (!$this->technos->contains($techno)) {
            $this->technos[] = $techno;
        }

        return $this;
    }

    public function removeTechno(Technos $techno): self
    {
        $this->technos->removeElement($techno);

        return $this;
    }
}
