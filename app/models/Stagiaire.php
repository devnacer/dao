<?php
class Stagiaire {
    private $id;
    private $name;
    private $familyName;
    private $old;
    private $login;
    private $password;

    // Getter for $id
    public function getId() {
        return $this->id;
    }

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

    public function connectToDatabase() {
        $host = "localhost"; // Database host name
        $dbname = "dao"; // Database name
        $username = "root"; // Database username
        $password = ""; // Database password
        
        try {
            // Create a new instance of the PDO (PHP Data Objects) class to establish a database connection.
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
            // Configure PDO to throw exceptions in case of SQL errors.
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // Set character encoding to avoid encoding issues.
            $pdo->exec("SET NAMES 'utf8'");
            
            return $pdo; // Return the PDO connection
        } catch (PDOException $e) {
            // In case of connection error
            die("Database connection error: " . $e->getMessage());
        }
    }
    

    public function create(){
        $sqls = $this->connectToDatabase()->prepare("INSERT INTO stagiaire VALUES(null, ?, ?, ?, ?, ?)");
        return($sqls->execute([
            $this->name,
            $this->familyName,
            $this->old,
            $this->login,
            $this->password
        ]));
    }

    public function edit(){

    }

    public function destroy(){

    }
    


}
