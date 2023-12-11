<?php
namespace Product;
class Product {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

echo 'yoo';
echo __NAMESPACE__;