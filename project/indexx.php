<?php
// require '../vendor/autoload.php';
// require_once '../vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';

use project\Book;

$book12 = new Book('mytitle12', 1123);
var_dump($book12->getTitle());

?>
