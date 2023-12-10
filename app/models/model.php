<?php
class Model {
    protected $id;
    protected static $database;

    // Getter for $id
    public function getId() {
        return $this->id;
    }

    public static function connectToDatabase() {
        $host = "localhost"; // Database host name
        $dbname = "dao"; // Database name
        $username = "root"; // Database username
        $password = ""; // Database password
        
        try {

            if(is_null(self::$database)){
                                
                // Create a new instance of the PDO (PHP Data Objects) class to establish a database connection.
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
                // Configure PDO to throw exceptions in case of SQL errors.
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                // Set character encoding to avoid encoding issues.
                $pdo->exec("SET NAMES 'utf8'");
    
                self::$database = $pdo;
                
            }
            return self::$database; // Return the PDO connection
            
            
        } catch (PDOException $e) {
            // In case of connection error
            die("Database connection error: " . $e->getMessage());
        }
    } 
}

?>