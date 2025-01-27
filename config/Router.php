<?php

namespace Config;

use Controllers\PageController;

class Router
{
    // Le constructeur vide
    public function __construct()
    {
        // Rien à initialiser pour le moment
    }

    // Méthode pour gérer les requêtes
    public function handleRequest(array $get): void
    {
        // Instancie le contrôleur de page
        $controller = new PageController();
        
        // Vérifie si la clé 'route' existe dans $get et si elle vaut "a-propos"
        if (isset($get["route"]) && $get["route"] === "a-propos") {
            $controller->about();
        } elseif (isset($get["route"]) && $get["route"] === "contact") { // Nouvelle route
        $controller->contact();
        // Si $get["route"] n'existe pas
        } elseif (!isset($get["route"])) {
            $controller->home(); // Appelle la méthode home
        }
        // Dans tous les autres cas
        else {
            $controller->notFound(); // Appelle la méthode notFound
        }
    }
}

?>

