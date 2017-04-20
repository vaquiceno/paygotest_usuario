<?php 

class Database{
    private $host      = "localhost";
    private $user      = "root";
    private $pass      = "";
    private $dbname    = "paygotest";
 
    private $conn;

 
    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ";charset=latin1";
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $limit = 10;
        $counter = 0;
        // Create a new PDO instance
        while (true){
            try{
                set_error_handler(array($this, 'errHandler'));
                $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
                restore_error_handler();
                break;
            }
            // Catch any errors
            catch(PDOException $e){
                echo "error $counter";
                $this->conn = null;
                $counter++;
                if ($counter == $limit)
                    throw $e;
            }
        }
    }

    public function errHandler($errno, $errstr){}

    public function InsertUserDataCSV($arr, $number){
        try {
            $this->conn->exec("SET NAMES latin1");
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

    public function SelectUserData($pg, $nreg){
        try {
            $offset = ($pg-1)*$nreg;
            $this->conn->exec("SET NAMES utf8");
            $stmt = $this->conn->prepare("SELECT * FROM user where 1=1 LIMIT :offset, :nreg");
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->bindParam(':nreg', $nreg, PDO::PARAM_INT);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            return $resultado;
        } catch(PDOException $e) {
            die("Ocurrio el siguiente error al procesar la transaccion: " . $e->getMessage());
        }        
    }

    public function GetLengthUser(){
        try {
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM user where 1=1");
            $stmt->execute();
            $resultado = $stmt->fetchColumn();
            return $resultado;
        } catch(PDOException $e) {
            die("Ocurrio el siguiente error al procesar la transaccion: " . $e->getMessage());
        }        
    }

    public function ModifyUniqueUser($id, $name, $lastname){
        try {
            $stmt = $this->conn->prepare("UPDATE user SET name=:name, lastname=:lastname WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->execute();
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

    public function DeleteUniqueUser($id){
        try {
            $stmt = $this->conn->prepare("DELETE from user where id=:id");
            $stmt->bindParam(':id', $id);
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