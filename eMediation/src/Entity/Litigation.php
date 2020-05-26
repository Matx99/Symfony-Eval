<?php

namespace App\Entity;

use App\Repository\LitigationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LitigationRepository::class)
 */
class Litigation
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
    private $subject;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $article;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $payment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refund;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $delay;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity=Document::class, mappedBy="litigation")
     */
    private $document;

    /**
     * @ORM\ManyToOne(targetEntity=ExpertiseField::class, inversedBy="litigations")
     */
    private $expertiseField;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="litigations")
     */
    private $user;

    public function __construct()
    {
        $this->document = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(string $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getPayment(): ?string
    {
        return $this->payment;
    }

    public function setPayment(string $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getRefund(): ?string
    {
        return $this->refund;
    }

    public function setRefund(?string $refund): self
    {
        $this->refund = $refund;

        return $this;
    }

    public function getDelay(): ?string
    {
        return $this->delay;
    }

    public function setDelay(?string $delay): self
    {
        $this->delay = $delay;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|Document[]
     */
    public function getDocument(): Collection
    {
        return $this->document;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->document->contains($document)) {
            $this->document[] = $document;
            $document->setLitigation($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->document->contains($document)) {
            $this->document->removeElement($document);
            // set the owning side to null (unless already changed)
            if ($document->getLitigation() === $this) {
                $document->setLitigation(null);
            }
        }

        return $this;
    }

    public function getExpertiseField(): ?ExpertiseField
    {
        return $this->expertiseField;
    }

    public function setExpertiseField(?ExpertiseField $expertiseField): self
    {
        $this->expertiseField = $expertiseField;

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
