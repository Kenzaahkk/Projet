<?php

namespace App\Entity;

use App\Repository\ListeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListeRepository::class)]
class Liste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $favoris = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?client $client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFavoris(): ?string
    {
        return $this->favoris;
    }

    public function setFavoris(string $favoris): static
    {
        $this->favoris = $favoris;

        return $this;
    }

    public function getClient(): ?client
    {
        return $this->client;
    }

    public function setClient(?client $client): static
    {
        $this->client = $client;

        return $this;
    }
}
