<?php

namespace App\Entity;

use App\Repository\DogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DogRepository::class)]
class Dog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $good_with_children = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $good_with_other_dogs = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $shedding = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $grooming = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $drooling = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $coat_length = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $good_with_strangers = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $playfulness = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $protectiveness = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $trainability = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $energy = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $barking = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $house_size = null;

    #[ORM\Column(nullable: true)]
    private ?bool $ppp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGoodWithChildren(): ?int
    {
        return $this->good_with_children;
    }

    public function setGoodWithChildren(int $good_with_children): self
    {
        $this->good_with_children = $good_with_children;

        return $this;
    }

    public function getGoodWithOtherDogs(): ?int
    {
        return $this->good_with_other_dogs;
    }

    public function setGoodWithOtherDogs(int $good_with_other_dogs): self
    {
        $this->good_with_other_dogs = $good_with_other_dogs;

        return $this;
    }

    public function getShedding(): ?int
    {
        return $this->shedding;
    }

    public function setShedding(int $shedding): self
    {
        $this->shedding = $shedding;

        return $this;
    }

    public function getGrooming(): ?int
    {
        return $this->grooming;
    }

    public function setGrooming(int $grooming): self
    {
        $this->grooming = $grooming;

        return $this;
    }

    public function getDrooling(): ?int
    {
        return $this->drooling;
    }

    public function setDrooling(int $drooling): self
    {
        $this->drooling = $drooling;

        return $this;
    }

    public function getCoatLength(): ?int
    {
        return $this->coat_length;
    }

    public function setCoatLength(int $coat_length): self
    {
        $this->coat_length = $coat_length;

        return $this;
    }

    public function getGoodWithStrangers(): ?int
    {
        return $this->good_with_strangers;
    }

    public function setGoodWithStrangers(int $good_with_strangers): self
    {
        $this->good_with_strangers = $good_with_strangers;

        return $this;
    }

    public function getPlayfulness(): ?int
    {
        return $this->playfulness;
    }

    public function setPlayfulness(int $playfulness): self
    {
        $this->playfulness = $playfulness;

        return $this;
    }

    public function getProtectiveness(): ?int
    {
        return $this->protectiveness;
    }

    public function setProtectiveness(int $protectiveness): self
    {
        $this->protectiveness = $protectiveness;

        return $this;
    }

    public function getTrainability(): ?int
    {
        return $this->trainability;
    }

    public function setTrainability(int $trainability): self
    {
        $this->trainability = $trainability;

        return $this;
    }

    public function getEnergy(): ?int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    public function getBarking(): ?int
    {
        return $this->barking;
    }

    public function setBarking(int $barking): self
    {
        $this->barking = $barking;

        return $this;
    }

    public function getHouseSize(): ?int
    {
        return $this->house_size;
    }

    public function setHouseSize(int $house_size): self
    {
        $this->house_size = $house_size;

        return $this;
    }

    public function isPpp(): ?bool
    {
        return $this->ppp;
    }

    public function setPpp(?bool $ppp): self
    {
        $this->ppp = $ppp;

        return $this;
    }
}
