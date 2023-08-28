<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'idProduit')]
    private ?int $idProduit = null;

    #[ORM\Column(name:'nom',length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name:'prix')]
    private ?float $prix = null;

    #[ORM\Column(name:'quantiteEnStock')]
    private ?int $quantiteEnStock = null;

    #[ORM\Column(name:'description',length: 1024)]
    private ?string $description = null;

    #[ORM\Column(name:'imagePath',length: 255, nullable: true)]
    private ?string $imagePath = null;

    #[ORM\ManyToOne(targetEntity:Categorie::class, inversedBy:"produit", cascade:["persist"])]
    #[ORM\JoinColumn(name:'idCategorie', referencedColumnName:'idCategorie')]
    
    private $mainCategorie;

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantiteEnStock(): ?int
    {
        return $this->quantiteEnStock;
    }

    public function setQuantiteEnStock(int $quantiteEnStock): self
    {
        $this->quantiteEnStock = $quantiteEnStock;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getMainCategorie(): ?Categorie
    {
        return $this->mainCategorie;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

}
