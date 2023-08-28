<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'idCategorie')]
    private ?int $idCategorie = null;

    #[ORM\Column(name:'categorie',length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(name:'sortOrder')]
    private ?int $sortOrder = null;

    #[ORM\OneToMany(targetEntity:Produit::class, mappedBy:"mainCategorie", fetch:"LAZY")]
    private $produits;

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function getProduit() : Collection {
        return $this->produits;
    }
}
