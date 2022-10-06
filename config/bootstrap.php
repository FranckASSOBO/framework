<?php

// Chargement de lautoloader de composer

require __DIR__ . "/../vendor/autoload.php";

// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

//Chargement du container de dépendances
$container = require_once __DIR__ . "/dependenciesInjection/container.php";

