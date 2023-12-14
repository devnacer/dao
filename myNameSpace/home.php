<?php

require '../Autoloader.php';
Autoloader::register(); 

echo __NAMESPACE__;
use DAO\myNameSpace\User\User; // Corrected namespace usage



$user33 = new User('123');
var_dump($user33);

?>