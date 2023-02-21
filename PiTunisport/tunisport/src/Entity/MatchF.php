<?php

namespace App\Entity;

use App\Repository\MatchFRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatchFRepository::class)]
class MatchF
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HeureDebM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HeureFinM = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateMatch = null;

    #[ORM\Column(length: 255)]
    private ?string $equipeA = null;

    #[ORM\Column(length: 255)]
    private ?string $equipeB = null;

    #[ORM\Column(length: 255)]
    private ?string $typeMatch = null;

    #[ORM\Column(length: 255)]
    private ?string $stade = null;

    #[ORM\Column(length: 255)]
    private ?string $tournois = null;

    #[ORM\Column(length: 255)]
    private ?int $resultatA = null;

    #[ORM\Column]
    private ?int $resultatB = null;

    #[ORM\ManyToMany(targetEntity: reservation::class, inversedBy: 'matchFs')]
    private Collection $reservation;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeureDebM(): ?\DateTimeInterface
    {
        return $this->HeureDebM;
    }

    public function setHeureDebM(\DateTimeInterface $HeureDebM): self
    {
        $this->HeureDebM = $HeureDebM;

        return $this;
    }

    public function getHeureFinM(): ?\DateTimeInterface
    {
        return $this->HeureFinM;
    }

    public function setHeureFinM(\DateTimeInterface $HeureFinM): self
    {
        $this->HeureFinM = $HeureFinM;

        return $this;
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->dateMatch;
    }

    public function setDateMatch(\DateTimeInterface $dateMatch): self
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    public function getEquipeA(): ?string
    {
        return $this->equipeA;
    }

    public function setEquipeA(string $equipeA): self
    {
        $this->equipeA = $equipeA;

        return $this;
    }

    public function getEquipeB(): ?string
    {
        return $this->equipeB;
    }

    public function setEquipeB(string $equipeB): self
    {
        $this->equipeB = $equipeB;

        return $this;
    }

    public function getTypeMatch(): ?string
    {
        return $this->typeMatch;
    }

    public function setTypeMatch(string $typeMatch): self
    {
        $this->typeMatch = $typeMatch;

        return $this;
    }

    public function getStade(): ?string
    {
        return $this->stade;
    }

    public function setStade(string $stade): self
    {
        $this->stade = $stade;

        return $this;
    }

    public function getTournois(): ?string
    {
        return $this->tournois;
    }

    public function setTournois(string $tournois): self
    {
        $this->tournois = $tournois;

        return $this;
    }

    public function getResultatA(): ?int
    {
        return $this->resultatA;
    }

    public function setResultatA(int $resultatA): self
    {
        $this->resultatA = $resultatA;

        return $this;
    }

    public function getResultatB(): ?int
    {
        return $this->resultatB;
    }

    public function setResultatB(int $resultatB): self
    {
        $this->resultatB = $resultatB;

        return $this;
    }

    /**
     * @return Collection<int, reservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
        }

        return $this;
    }

    public function removeReservation(reservation $reservation): self
    {
        $this->reservation->removeElement($reservation);

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
}