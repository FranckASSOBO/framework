<?php

use App\Kernel;

    /**
     * ----------------------------------------------------
     * Bienvenue dans notre framework fait maison
     * 
     * L'index.php représente le "FrontController"
     * Ses rôles : 
     *              - Charger le fichier de configuration
     *              - Créer une nouvelle instance du noyau
     *              - Récupérer la réponse qui sera ensuite 
     *                envoyée au navigateur
     * ----------------------------------------------------
    */


    // Chargement du fichier de configuration

require dirname(__DIR__) . "/config/bootstrap.php";

//dd($_SERVER);

// if($_SERVER['REQUEST_URI']=="/")
// {
//     dd("page d'accueil");

// }
// else
// {
//     dd("l'utisateur veut accèder à une page");

// }
    // Création d'une nouvelle instance du noyau de l'application
    $kernel = new Kernel($container);

/**
     * Le frontController demande au noyau de soummetrre la requête
     * et de récupérer la réponse correspondante
     */
    $response = $kernel->handleRequest();


    // Envoi de la réponse au navigateur



