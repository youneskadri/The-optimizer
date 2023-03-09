<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom l'évènement est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le nom de l'évènement contient moins de 3 charactères")]
    private ?string $nomEvent = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\Range( min : "today",notInRangeMessage : "The date must be minimum today " )]
    private ?\DateTimeInterface $dateEvent = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heureDeb = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heureFin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La localisation de l'évènement est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "La localisation de l'évènement contient moins de 3 charactères")]
    private ?string $localisation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type de l'évènement est obligatoire")]
    #[Assert\Length(min: 3 ,minMessage: "Le type de l'évènement contient moins de 3 charactères")]
    private ?string $typeEvent = null;

    #[ORM\Column(length: 255)]
    
    private ?string $image = null;

   

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    public function getHeureDeb(): ?\DateTimeInterface
    {
        return $this->heureDeb;
    }

    public function setHeureDeb(\DateTimeInterface $heureDeb): self
    {
        $this->heureDeb = $heureDeb;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(\DateTimeInterface $heureFin): self
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getTypeEvent(): ?string
    {
        return $this->typeEvent;
    }

    public function setTypeEvent(?string $typeEvent): self
    {
        $this->typeEvent = $typeEvent;

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
