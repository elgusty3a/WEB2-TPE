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

  function filterBy($filter){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM productos p INNER JOIN categorias c WHERE c.categoria = ? AND (p.id_categoria = c.id)');
    $query->execute([$filter]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }
}