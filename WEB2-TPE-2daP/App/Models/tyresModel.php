<?php
class tyresModel{

  function __construct(){


  }
  /**
   *? Obtiene la lista de productos de la DB
   */
  function getListProducts(){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM productos');
    $query->execute();
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  function filterBy($filter,$value){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM productos WHERE '.$filter.' = ?');
    $query->execute([$value]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }
}