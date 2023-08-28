<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    private $em = null;

    #[Route('/', name: 'app_catalogue')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $this->em = $doctrine->getManager();

        $categorie = $request->query->get('categorie'); 
        $searchField = $request->request->get('search_field'); 

        $categories = $this->retrieveAllCategories();

        $produits = $this->retrieveProduits($categorie, $searchField);
        
        return $this->render('catalogue/index.html.twig', ['produits' => $produits, 'categories' => $categories]);
    }

    #[Route('/produit/{idProduit}', name:'produit_modal')]
    public function infoProduit($idProduit, Request $request, ManagerRegistry $doctrine): Response {

        $this->em = $doctrine->getManager();

        $produit = $this->em->getRepository(Produit::class)->find($idProduit);

        return $this->render('catalogue/produit.modal.twig', ['produit' => $produit]);

    }
    
    private function retrieveProduits($categorie, $searchField) {
        return $this->em->getRepository(Produit::class)->findWithCriteria($categorie, $searchField);
    }

    private function retrieveProduitFromCategorie($categorie) {
        return $this->em->getRepository(Categorie::class)->find($categorie)->getProduit();
    }

    private function retrieveAllCategories() 
    {
        return $this->em->getRepository(Categorie::class)->findAll();
    }

    private function retrieveAllProduits() 
    {
        return $this->em->getRepository(Produit::class)->findAll();
    }
}
