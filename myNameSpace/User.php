<?php
namespace DAO\myNameSpace\User;

class User {
    public $username;

    public function __construct($username) {
        $this->username = $username;
    }
    
    public function name() {
        $name = __NAMESPACE__;
        return $name;
    }
}
