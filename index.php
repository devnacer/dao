<?php
require_once 'app/models/Stagiaire.php';

// $stagiaire12 = new Stagiaire();

// $stagiaire12->create();
echo('<pre>');
// var_dump($stagiaire12->create());
echo('</pre>');

// $stagiaire12->delete(7);
// $stagiaire12->setName('ricardo');
// $stagiaire12->setFamilyName('kaka');
// $stagiaire12->setOld('27');
// $stagiaire12->setLogin('ricardo');
// $stagiaire12->setPassword('ricardo');

// $stagiaire12->edit(12);

echo('<pre>');
// var_dump($stagiaire12->edit(12));
echo('</pre>');

echo('<pre>');
$class = stagiaire::find(10);
var_dump($class);
var_dump($class->getFamilyName());
echo('</pre>');

echo('<pre>');
$stagiaireAll = stagiaire::findAll();
foreach($stagiaireAll as $stagiaire){
var_dump($stagiaire->getFamilyName());
}
echo('</pre>');


echo('<pre>');

$stagiaireWhere = stagiaire::where('id', 10, '>');
var_dump($stagiaireWhere);

echo('</pre>');

