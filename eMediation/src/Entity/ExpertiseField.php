<?php

namespace App\Entity;

use App\Repository\ExpertiseFieldRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExpertiseFieldRepository::class)
 */
class ExpertiseField
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Litigation::class, mappedBy="expertiseField")
     */
    private $litigations;

    public function __construct()
    {
        $this->litigations = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
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
     * @return Collection|Litigation[]
     */
    public function getLitigations(): Collection
    {
        return $this->litigations;
    }

    public function addLitigation(Litigation $litigation): self
    {
        if (!$this->litigations->contains($litigation)) {
            $this->litigations[] = $litigation;
            $litigation->setExpertiseField($this);
        }

        return $this;
    }

    public function removeLitigation(Litigation $litigation): self
    {
        if ($this->litigations->contains($litigation)) {
            $this->litigations->removeElement($litigation);
            // set the owning side to null (unless already changed)
            if ($litigation->getExpertiseField() === $this) {
                $litigation->setExpertiseField(null);
            }
        }

        return $this;
    }
}
