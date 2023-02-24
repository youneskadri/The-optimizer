<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BlogRepository::class)]
class Blog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


/**
     * @Assert\NotBlank(message="Please enter a commentaire")
     * @Assert\Length(
     *     min=3,
     *     max=100,
     *     minMessage="Username must be at least {{ limit }} characters long",
     *     maxMessage="Username cannot be longer than {{ limit }} characters"
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $titre = null;

/**
     * @Assert\NotBlank(message="Please enter a commentaire")
     * @Assert\Length(
     *     min=3,
     *     max=200,
     *     minMessage="titre must be at least {{ limit }} characters long",
     *     maxMessage="titre cannot be longer than {{ limit }} characters"
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $descreption = null;

/**
     * @Assert\NotBlank(message="Please enter a commentaire")
     * @Assert\Length(
     *     min=3,
     *     max=3000,
     *     minMessage="descreption must be at least {{ limit }} characters long",
     *     maxMessage="descreption cannot be longer than {{ limit }} characters"
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $contenu = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'blog', targetEntity: Commentaire::class)]
    private Collection $commentaire;

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
    public function __toString()
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescreption(): ?string
    {
        return $this->descreption;
    }

    public function setDescreption(string $descreption): self
    {
        $this->descreption = $descreption;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire->add($commentaire);
            $commentaire->setBlog($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getBlog() === $this) {
                $commentaire->setBlog(null);
            }
        }

        return $this;
    }
}
