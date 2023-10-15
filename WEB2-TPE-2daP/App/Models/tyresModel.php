<?php
class tyresModel{

  function __construct(){


  }

  function singinUser($user){
    // function singinUser($email){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    // $query = $db->prepare('SELECT * FROM usuarios u WHERE u.email = ?');
    // $query->execute([$email]);
    $query = $db->prepare('SELECT * FROM usuarios u WHERE u.nombreUsuario = ?');
    $query->execute([$user]);
    $existUser = $query->fetch(PDO::FETCH_OBJ);
    return $existUser;
  }

  function queryCategories(){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM categorias');
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
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
  function btnagregarItem($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('INSERT INTO productos (marca,medidas,indice_carga,indice_velocidad,precio,id_categoria) VALUES (?,?,?,?,?,?)');
    $query->execute([$marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }
  function editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $sentence = "UPDATE `productos` SET `productos`.`marca`=?,`productos`.`medidas`=?,`productos`.`indice_carga`=?,`productos`.`indice_velocidad`=?,`productos`.`precio`=?,`productos`.`id_categoria`=? WHERE `productos`.`id_producto`=?";
    $query = $db->prepare($sentence);
    $query->execute([$marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }

  function eraseItem($id){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $sentence = "DELETE FROM `productos` WHERE `productos`.`id_producto`=?;";
    $query = $db->prepare($sentence);
    $query->execute([$id]);
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    return $products;
  }
  function eraseCat($id){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $sentence = "DELETE FROM `categorias` WHERE `categorias`.`id`=?;";
    $query = $db->prepare($sentence);
    $query->execute([$id]);
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
  }

  
  function addUser($nombreUsuario,$email,$pass){
    $pass = password_hash($pass, PASSWORD_BCRYPT);
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare("INSERT INTO usuarios (nombreUsuario,email,pass) VALUES (?,?,?)");
    $query->execute([$nombreUsuario, $email, $pass]);
  }
  
  function btnagregarCat($categoria){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tresa_neumaticos;charset=utf8', 'root', '');
    $query = $db->prepare('INSERT INTO categorias (categoria) VALUES (?)');
    $query->execute([$categoria]);
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);
    return $categorias;
  }


}