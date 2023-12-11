<?php
// require_once 'Etudiant.php';

require 'Autoloader.php';
Autoloader::register();

$etudiant12 = new Etudiant('pedro','ramos');
var_dump($etudiant12->getNom());

$prof33 = new Prof('xabi','alonso');
var_dump($prof33->getNom());