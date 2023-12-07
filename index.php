<?php
require_once 'app/models/Stagiaire.php';

$stagiaire12 = new Stagiaire();

$stagiaire12->setName('nac');
$stagiaire12->setFamilyName('kal');
$stagiaire12->setOld('27');
$stagiaire12->setLogin('nac');
$stagiaire12->setPassword('nac');

$stagiaire12->create();
echo('<pre>');
var_dump($stagiaire12->create());
echo('</pre>');


