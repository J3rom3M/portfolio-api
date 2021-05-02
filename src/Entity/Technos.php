<?php

namespace App\Entity;

use App\Repository\TechnosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=TechnosRepository::class)
 */
class Technos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("technos_get")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("technos_get")
     * 
     */
    private $title;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups("technos_get")
     */
    private $percentage;

    /**
     * @ORM\ManyToMany(targetEntity=Projects::class, mappedBy="technos")
     * @Groups("technos_get")
     */
    private $projects;

    public function __construct()
    {
        $this->projects = new ArrayCollection();
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

    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    public function setPercentage(?float $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * @return Collection|Projects[]
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Projects $project): self
    {
        if (!$this->projects->contains($project)) {
            $this->projects[] = $project;
            $project->addTechno($this);
        }

        return $this;
    }

    public function removeProject(Projects $project): self
    {
        if ($this->projects->removeElement($project)) {
            $project->removeTechno($this);
        }

        return $this;
    }
}
