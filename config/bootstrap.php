<?php

// Chargement de lautoloader de composer

require __DIR__ . "/../vendor/autoload.php";

// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

