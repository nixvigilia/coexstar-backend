<?php
class Database{
    
    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
    // private $db_host = '127.0.0.1';
    // private $db_name = 'php_auth_api';
    // private $db_username = 'root';
    // private $db_password = 'root';

    private $db_host = 'ec2-34-194-158-176.compute-1.amazonaws.com';
    private $db_name = 'dbq92ha2fjv4fj';
    private $db_username = 'kjnfmzbkswqdmy';
    private $db_password = '998c64f7649477b79979c530021f7305c459f30c651432c6484be3c2221eef3c';
    
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('pgsql:host='.$this->db_host.';port=5432;dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}

?>