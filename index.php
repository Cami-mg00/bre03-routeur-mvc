<?php

// Inclure l'autoload pour charger les classes nécessaires
require_once 'config/autoload.php';

use Config\Router;

// Instancier le routeur
$router = new Router();

// Passer la superglobale $_GET à la méthode handleRequest du routeur
$router->handleRequest($_GET);
