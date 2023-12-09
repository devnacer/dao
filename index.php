<?php
require_once 'app/models/Stagiaire.php';

$stagiaire12 = new Stagiaire();

// $stagiaire12->create();
echo('<pre>');
// var_dump($stagiaire12->create());
echo('</pre>');

// $stagiaire12->delete(7);
$stagiaire12->setName('pedro');
$stagiaire12->setFamilyName('pedro');
$stagiaire12->setOld('27');
$stagiaire12->setLogin('pedro');
$stagiaire12->setPassword('ped');

$stagiaire12->edit(9);
echo('<pre>');
var_dump($stagiaire12->edit(9));
echo('</pre>');
