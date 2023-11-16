<?php
class bd{
    private $host='localhost';
    private $user='root';
    private $password='';
    private $dbname='practicc';
    
    public function conexion(){
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
            // Configura el modo de error de PDO para que lance excepciones en caso de error
            return $PDO;
        } catch (PDOException $e) {
            return "Error de conexión: " . $e->getMessage();
        }
    }
}
?>
