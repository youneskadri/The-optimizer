<?php

namespace App\Entity;

use App\Repository\CategoryHebergementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryHebergementRepository::class)]
class CategoryHebergement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomcategory = null;
    #[ORM\OneToMany(targetEntity: Hebergement::class, mappedBy: 'categoryHebergement')]

    private Collection $hebergements;

    public function __construct()
    {
        $this->hebergements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function __toString() {
        return $this->id;
    }

    public function getNomcategory(): ?string
    {
        return $this->nomcategory;
    }

    public function setNomcategory(string $nomcategory)
    {
        $this->nomcategory = $nomcategory;

        return $this;
    }

    /**
     * @return Collection<int, Hebergement>
     */
    public function getHebergements(): Collection
    {
        return $this->hebergements;
    }

    public function addHebergement(Hebergement $hebergement): self
    {
        if (!$this->hebergements->contains($hebergement)) {
            $this->hebergements->add($hebergement);
            $hebergement->setCategoryHebergement($this);
        }

        return $this;
    }

    public function removeHebergement(Hebergement $hebergement): self
    {
        if ($this->hebergements->removeElement($hebergement)) {
            // set the owning side to null (unless already changed)
            if ($hebergement->getCategoryHebergement() === $this) {
                $hebergement->setCategoryHebergement(null);
            }
        }

        return $this;
    }
}
