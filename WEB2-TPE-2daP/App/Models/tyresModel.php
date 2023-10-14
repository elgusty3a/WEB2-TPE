<?php
class tyresModel{

  function __construct(){


  }

  function singinUser($email){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM usuarios u WHERE u.email = ?');
    $query->execute([$email]);
    $existUser = $query->fetch(PDO::FETCH_OBJ);
    return $existUser;
  }


  /**
   *? Obtiene la lista de productos de la DB
   */
  function getListProducts(){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM productos p INNER JOIN categorias c ON p.id_categoria = c.id');
    $query->execute();
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  /**
   *? Filtra la lista de productos por categoria
   */

  function filterBy($filter){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM productos p INNER JOIN categorias c WHERE c.categoria = ? AND (p.id_categoria = c.id)');
    $query->execute([$filter]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  /**
   *? Agrega productos a la DB
   */
  function addItem($filter){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('');
    $query->execute([$filter]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }
  
  function addUser($nombreUsuario,$email,$pass){
    $pass = password_hash($pass, PASSWORD_BCRYPT);
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare("INSERT INTO usuarios (nombreUsuario,email,pass) VALUES (?,?,?)");
    $query->execute([$nombreUsuario, $email, $pass]);
  }
}