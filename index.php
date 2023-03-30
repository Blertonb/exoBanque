<h1>Exercice Banque</h1>

<?php

spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});


$titulaire1 = new Titulaire ("MARTIN", "Anne", "1998-04-04", "Paris");

$compte1 = new Compte("Compte Courant", 1000, "€", $titulaire1);
$compte2 = new Compte("Livret A", 500, "€", $titulaire1);


echo $titulaire1 -> displayAge();
echo $compte1 -> crediterCompte(100);
echo $compte2 -> debiterCompte(50);
echo $compte1 -> virement(20, $compte2);
echo $compte2 -> afficherSolde();
echo $titulaire1 -> infoTitulaire();
echo $compte1 -> infoCompte();
echo $compte2 -> infoCompte();


?>