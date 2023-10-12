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
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
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
</div>
</div>
</nav>
';
echo '<h1>HOLA HEADER!!!</h1>';

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


  function showFooter(){
    echo '<h3>SOY UN FOOTER!!!</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
';

  }




}