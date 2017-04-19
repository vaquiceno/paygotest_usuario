<?php 

class Database{
    private $host      = "localhost";
    private $user      = "root";
    private $pass      = "";
    private $dbname    = "paygotest";
 
    private $conn;

 
    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try{
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch(PDOException $e){
            die("Ocurrio el siguiente error al conectarse a la base de datos: " . $e->getMessage());
        }
    }

    public function InsertUserDataCSV($arr, $number){
        try {
            $stmt = $this->conn->prepare("INSERT INTO user (name, lastname)
            VALUES (:name, :lastname)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':lastname', $lastname);
            $i = 0;
            $longitud = count($arr);
            while ($i < $longitud && $i < $number){
                $row = $arr[$i];
                $name = $row[0];
                $lastname = $row[1];
                $stmt->execute();
                $i++;
            }
        } catch(PDOException $e) {
            die("Ocurrio el siguiente error al procesar la transaccion: " . $e->getMessage());
        }        
    }

    public function DeleteUserData(){
        try {
            $stmt = $this->conn->prepare("DELETE from user");
            $stmt->execute();
        } catch(PDOException $e) {
            die("Ocurrio el siguiente error al procesar la transaccion: " . $e->getMessage());
        }        
    }

    public function ResetAutoIncrement(){
        try {
            $stmt = $this->conn->prepare("ALTER TABLE user AUTO_INCREMENT = 1");
            $stmt->execute();
        } catch(PDOException $e) {
            die("Ocurrio el siguiente error al procesar la transaccion: " . $e->getMessage());
        }        
    }
}

?>