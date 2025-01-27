<?php

namespace Controllers;

class PageController
{
    // Le constructeur vide
    public function __construct()
    {
        // Rien à initialiser pour le moment
    }

    // Méthode pour afficher la page d'accueil
    public function home(): void
    {
        $route = "home"; // Définit la variable $route
        require "templates/layout.phtml"; // Inclut le fichier layout.phtml
        echo "Bienvenue sur la page d'accueil.";
    }

    // Méthode pour afficher la page 'À propos'
    public function about(): void
    {
        $route = "about"; // Définit la variable $route
        require "templates/layout.phtml"; // Inclut le fichier layout.phtml
        echo "Bienvenue sur la page À propos.";
    }
    
    //Méthode pour afficher la page contact
    public function contact(): void
{
    $route = "contact"; // Définit la route pour le template
    require "templates/layout.phtml"; // Charge la mise en page principale
}

    // Méthode pour afficher une page 404
    public function notFound(): void
    {
        $route = "notFound"; // Définit la variable $route
        require "templates/layout.phtml"; // Inclut le fichier layout.phtml
        echo "Page non trouvée.";
    }
}
