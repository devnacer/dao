<?php
require '../vendor/autoload.php';
use nac\Livre;

$livre = new Livre("Le Seigneur des Anneaux", "J.R.R. Tolkien", 1954);
echo "Titre: " . $livre->getTitre() . "<br>";