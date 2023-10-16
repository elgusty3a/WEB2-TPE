<?php
require_once './App/Views/tyresView.php';
class config{

  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "tresa_neumaticos";
  private $codification = "utf8";
  private $conn;
  private $view;


  function __construct(){
    $this->view = new tyresView();

    try {
      $this->conn = new PDO('mysql:host='.$this->servername.';dbname='.$this->dbname.';charset='.$this->codification,$this->username,$this->password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      $this->view->errorDBConect();
      die;
      // if ($e->getCode() == '23000')
      //           echo "<script>alert('Error: El email ya se encuentra registrado')</script>";
                //echo "Syntax Error: ".$e->getMessage();
      // echo "Connection failed: " . ($this->view->errorDBConect());
    }
  }

  function getDBConnection(){
    return $this->conn;
  }

}
?>