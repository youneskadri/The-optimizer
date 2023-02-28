<?php

namespace App\Entity;

use App\Repository\MatchFRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatchFRepository::class)]
class MatchF
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HeureDebM = null;

  

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\Range( min : "today",notInRangeMessage : "The date must be minimum today " )]
    private ?\DateTimeInterface $dateMatch = null;

    

    
    #[ORM\Column(length: 255)]
    #[Assert\Type(
        type: 'integer',
        message: 'La valeur {{ value }} n est pas valide {{ type }}.',
    )]
    private ?int $resultatA = null;

    #[ORM\Column]
    #[Assert\Type(
        type: 'integer',
        message: 'La valeur {{ value }} n est pas valide {{ type }}.',
    )]
    private ?int $resultatB = null;

    #[ORM\OneToMany(mappedBy: 'matchF', targetEntity: Reservation::class)]
    private Collection $reservation;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\ManyToOne(inversedBy: 'matchFs')]
    private ?Tournoi $tournoi = null;

    #[ORM\ManyToOne(inversedBy: 'matchFs')]
    private ?TypeMatch $type = null;

    #[ORM\ManyToOne(inversedBy: 'matchFs')]
    private ?Stade $stade = null;

    #[ORM\ManyToOne(inversedBy: 'matchFs')]
    private ?Equipe $equipeA = null;

    #[ORM\ManyToOne(inversedBy: 'matchFs')]
    private ?Equipe $equipeB = null;

   

 
    

    

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

    public function getTournoi(): ?Tournoi
    {
        return $this->tournoi;
    }

    public function setTournoi(?Tournoi $tournoi): self
    {
        $this->tournoi = $tournoi;

        return $this;
    }

    public function getType(): ?TypeMatch
    {
        return $this->type;
    }

    public function setType(?TypeMatch $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEquipeA(): ?Equipe
    {
        return $this->equipeA;
    }

    public function setEquipeA(?Equipe $equipeA): self
    {
        $this->equipeA = $equipeA;

        return $this;
    }

    public function getEquipeB(): ?Equipe
    {
        return $this->equipeB;
    }

    public function setEquipeB(?Equipe $equipeB): self
    {
        $this->equipeB = $equipeB;

        return $this;
    }

  

    
}
