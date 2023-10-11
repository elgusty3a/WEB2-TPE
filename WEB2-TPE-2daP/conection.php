<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "universitary_sys";
function conectDB($servername,$codification,$username,$password,$dbname){
  try {
    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset='.$codification,$username,$password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<p>Connected successfully</p><br>";
    return $conn;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
?>