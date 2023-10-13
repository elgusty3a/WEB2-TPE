<?php
require_once './router.php';


class tyresView {

  function __construct(){


  }

  function showHeader(){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <base href="'.BASE_URL.'">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="'.BASE_URL.'ejer5.css"> -->
  <title>Tresa Neumaticos</title>
</head>
<body>
';
echo'
<nav class="navbar navbar-expand-lg bg-body-tertiary">

<div class="container-fluid">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Productos por categoria
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="filter/cubierta">Cubiertas</a></li>
        <li><a class="dropdown-item" href="filter/camara">Camaras</a></li>
        <li><a class="dropdown-item" href="filter/llanta">Llantas</a></li>
      </ul>
    </li>
  </ul>
  <div class="col-md-3 col-md-auto text-end">
    <button type="button" class="btn btn-outline-primary me-2">Login</button>
    <button type="button" class="btn btn-primary">Sign-up</button>
  </div>
</div>
</div>
</nav>
';


  }

  function filterForm(){
    echo '
    
    ';
  }



  function renderListProduct($products){
    echo "<h1>Lista de productos</h 1>";
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo '<table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">Marca</th>
                <th scope="col">Medida</th>
              </tr>
            <thead>
            <tbody>
    ' ;
    foreach($products as $product) {
      echo '
        <tr>
          <td>'.$product->marca.'</td>
          <td>'.$product->medidas.'</td>
        </tr>
      ' ;
    }
    echo " </tbody>
        </table>" ;
  }

  function renderListProductBy($products){
    echo "<h1>Lista de productos</h 1>";
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo '<table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">Marca</th>
                <th scope="col">Medida</th>
              </tr>
            <thead>
            <tbody>
    ' ;
    foreach($products as $product) {
      echo '
        <tr>
          <td>'.$product->marca.'</td>
          <td>'.$product->medidas.'</td>
        </tr>
      ' ;
    }
    echo " </tbody>
        </table>" ;
  }
  function renderError() {
    echo "<h2>Error! Género no especificado.</h2>" ;
  }

  function addItem(){
    echo'
    <section class="container">
    <form action="" method="post">
      <label class="col-form-label" for="idmateria">id:</label><input class="form-control" type="text" name="idmateria" value="" placeholder="" id="idmateria" require="idmateria" /><br />
      <label class="col-form-label" for="materia">materia:</label><input class="form-control" type="text" name="materia" value="" placeholder="" id="materia" require="materia" /><br />
      <label class="col-form-label" for="profe">profesor:</label><input class="form-control" type="text" name="profe" value="" placeholder="" id="profe" require="profe" /><br />
      <button class="btn btn-success" value="btnagregar" type="submit" name="action">Agregar</button>
      <button class="btn btn-info" value="btnbuscar" type="submit" name="action">Buscar</button>
      <button class="btn btn-primary" value="btneditar" type="submit" name="action">Editar</button>
      <button class="btn btn-danger" value="btneliminar" type="submit" name="action">Eliminar Materia</button>
      <button class="btn btn-light" value="btnlimpiar" type="submit" name="action">Limpiar</button>
      <button class="btn btn-light" value="btnarray" type="submit" name="action">array</button>
    </form>
    <br />
    <form action="" method="get">
      <input type="hidden" name="id_product" id="id_product">
      <label for=""></label><input type="text" name="nombre" id="name">
      <label for=""></label><input type="text" name="tipo" id="category">
      <label for=""></label><input type="text" name="medida" id="size">
      <label for=""></label><input type="text" name="precio" id="price">
      <input type="submit" value="">
    </form>
    </section>
    ';
  }


  function showFooter(){
    echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
';

  }




}