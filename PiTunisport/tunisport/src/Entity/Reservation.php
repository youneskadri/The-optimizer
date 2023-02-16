<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateResevation = null;

    #[ORM\Column]
    private ?bool $etat = null;

    #[ORM\Column]
    private ?int $nombreBillet = null;

    #[ORM\ManyToMany(targetEntity: MatchF::class, mappedBy: 'reservation')]


    private Collection $matchFs;

    #[ORM\ManyToOne(inversedBy: 'reservation')]
    private ?Billet $billet = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservation')]

    private ?User $user = null;

    public function __construct()
    {
        $this->matchFs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateResevation(): ?\DateTimeInterface
    {
        return $this->dateResevation;
    }

    public function setDateResevation(\DateTimeInterface $dateResevation): self
    {
        $this->dateResevation = $dateResevation;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNombreBillet(): ?int
    {
        return $this->nombreBillet;
    }

    public function setNombreBillet(int $nombreBillet): self
    {
        $this->nombreBillet = $nombreBillet;

        return $this;
    }

    /**
     * @return Collection<int, MatchF>
     */
    public function getMatchFs(): Collection
    {
        return $this->matchFs;
    }

    public function addMatchF(MatchF $matchF): self
    {
        if (!$this->matchFs->contains($matchF)) {
            $this->matchFs->add($matchF);
            $matchF->addReservation($this);
        }

        return $this;
    }

    public function removeMatchF(MatchF $matchF): self
    {
        if ($this->matchFs->removeElement($matchF)) {
            $matchF->removeReservation($this);
        }

        return $this;
    }

    public function getBillet(): ?Billet
    {
        return $this->billet;
    }

    public function setBillet(?Billet $billet): self
    {
        $this->billet = $billet;

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

    public function __toString()
    {
        return $this->id; // return a string representation of the Billet object
    }
}
