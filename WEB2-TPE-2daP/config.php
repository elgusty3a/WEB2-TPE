<?php

class config{

  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "tresa_neumaticos";
  private $codification = "utf8";

  private $conn;


  function __construct(){
    try {
      $this->conn = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbname.';charset='.$this->codification,$this->username,$this->password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  function getDBConnection(){
    return $this->conn;
  }

}
?>