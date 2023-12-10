<?php
require 'Model.php';

class Stagiaire extends Model {
    private $name;
    private $familyName;
    private $old;
    private $login;
    private $password;

    
    // Getter for $name
    public function getName() {
        return $this->name;
    }

    // Setter for $name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for $familyName
    public function getFamilyName() {
        return $this->familyName;
    }

    // Setter for $familyName
    public function setFamilyName($familyName) {
        $this->familyName = $familyName;
    }

    // Getter for $old
    public function getOld() {
        return $this->old;
    }

    // Setter for $old
    public function setOld($old) {
        $this->old = $old;
    }

    // Getter for $login
    public function getLogin() {
        return $this->login;
    }

    // Setter for $login
    public function setLogin($login) {
        $this->login = $login;
    }

    // Getter for $password
    public function getPassword() {
        return $this->password;
    }

    // Setter for $password
    public function setPassword($password) {
        $this->password = $password;
    }

    
    public function create(){
        $sqls = static::connectToDatabase()->prepare("INSERT INTO stagiaire VALUES(null, ?, ?, ?, ?, ?)");
        return($sqls->execute([
            $this->name,
            $this->familyName,
            $this->old,
            $this->login,
            $this->password
        ]));
    }

    public function edit($id){
        $sqls = static::connectToDatabase()->prepare("UPDATE stagiaire
                                                     SET name = ?,
                                                         familyName = ?,
                                                         old = ?,
                                                         login = ?,
                                                         password = ?
                                                    WHERE id = ?");
        return($sqls->execute([
            $this->name,
            $this->familyName,
            $this->old,
            $this->login,
            $this->password,
            $id
        ]));
        


    }

    public function delete($id){
        $sqls = static::connectToDatabase()->prepare("DELETE FROM stagiaire WHERE id= ?");
        return $sqls->execute([$id]);

    }

    public static function find($id){
        $sqls = static::connectToDatabase()->prepare("SELECT * from stagiaire Where id = ?");
        $sqls->execute([$id]);
        $stagiaire = current($sqls->fetchAll(PDO::FETCH_CLASS, stagiaire::class));
        return $stagiaire;

    }

    public static function findAll(){
        $sqls = static::connectToDatabase()->prepare("SELECT * from stagiaire");
        $sqls->execute();
        $stagiaire = $sqls->fetchAll(PDO::FETCH_CLASS,'stagiaire');
        return $stagiaire;

    }

    public static function where($col, $val, $operator){
        $sqls = static::connectToDatabase()->prepare("SELECT * FROM stagiaire WHERE $col $operator ?");
        $sqls->execute([$val]);
        $stagiaire = $sqls->fetchAll(PDO::FETCH_CLASS,'stagiaire');
        return $stagiaire; 
    }



}
