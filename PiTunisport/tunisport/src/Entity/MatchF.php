<?php

namespace App\Entity;

use App\Repository\MatchFRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: MatchFRepository::class)]
class MatchF
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("match")]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HeureDebM = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HeureFinM = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\Range( min : "today",notInRangeMessage : "The date must be minimum today " )]
    private ?\DateTimeInterface $dateMatch = null;

    #[ORM\Column(length: 255)]
    #[Groups("match")]
    #[Assert\NotBlank(message: "Le nom de l équipe à domicile est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le nom de l équipe à domicile contient moins de 3 charactères")]
    private ?string $equipeA = null;

    #[ORM\Column(length: 255)]
    #[Groups("match")]
    #[Assert\NotBlank(message: "Le nom de l équipe éxterieure est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le nom de l équipe éxterieure contient moins de 3 charactères")]
    private ?string $equipeB = null;

    #[ORM\Column(length: 255)]
    #[Groups("match")]
    #[Assert\NotBlank(message: "Le type du match est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le type du match contient moins de 3 charactères")]
    private ?string $typeMatch = null;

    #[ORM\Column(length: 255)]
    #[Groups("match")]
    #[Assert\NotBlank(message: "Le nom du stade est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le nom du stade contient moins de 3 charactères")]
    private ?string $stade = null;

    #[ORM\Column(length: 255)]
    #[Groups("match")]
    #[Assert\NotBlank(message: "Le nom du tournoi est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le nom du tournoi contient moins de 3 charactères")]
    private ?string $tournois = null;

    #[ORM\Column(length: 255)]
    #[Groups("match")]
    #[Assert\Type(
        type: 'integer',
        message: 'La valeur {{ value }} n est pas valide {{ type }}.',
    )]
    private ?int $resultatA = null;

    #[ORM\Column]
    #[Groups("match")]
    #[Assert\Type(
        type: 'integer',
        message: 'La valeur {{ value }} n est pas valide {{ type }}.',
    )]
    private ?int $resultatB = null;

    #[ORM\OneToMany(mappedBy: 'matchF', targetEntity: Reservation::class)]
    private Collection $reservation;

    #[ORM\Column]
    #[Groups("match")]
    private ?int $prix = null;

 
    

    

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
     * @return Collection<int, Reservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
            $reservation->setMatchF($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getMatchF() === $this) {
                $reservation->setMatchF(null);
            }
        }

        return $this;
    }

   

    public function getImageEquipeB(): ?string
    {
        return $this->imageEquipeB;
    }

    public function setImageEquipeB(string $imageEquipeB): self
    {
        $this->imageEquipeB = $imageEquipeB;

        return $this;
    }

    public function __toString()
    {
        return $this->id; 
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    
}
