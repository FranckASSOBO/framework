<?php

//Nouvelle instance du constructeur du conteneur
$builder = new DI\ContainerBuilder();

//Ajout des définitions
// les définitions sont les dépendances internes dont notre application
$builder->addDefinitions(__DIR__ . "/dependencies.php");

//Creation d'une conteneur grâce à son bulder
$container = $builder->build();

// Dès que ce fichier container sera appelé (require) quelque part,
//il doit nous retourne le container 
return $container;