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
      <a class="nav-link" href="list">Nuestros Productos</a>
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
    <a href="login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
    <a href="register"><button type="button" class="btn btn-primary">Sign-up</button></a>
  </div>
</div>
</div>
</nav>
';


  }

  function showLogin(){
    echo '
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
  
              </div>
  
              <div>
                <p class="mb-0">Dont have an account? <a href="register" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    ';
  }
  function showRegister(){
    echo '
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="text" id="nameUser" class="form-control form-control-lg" />
                  <label class="form-label" for="nameUser">Name User</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    ';
  }



  function renderListProduct($products){
    echo "<h1>Lista de productos</h1><br>";
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo '
        <section class="conteiner">
        <div class="row">
    <div class="col">
    
    </div>
        <div class="col-10">
        <table class="table table-dark table-striped table-sm">
        <thead>
              <tr class="text-center table-primary fs-1">
                <th scope="col">Marca</th>
                <th scope="col">Medida</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                </tr>
                <thead>
                <tbody>
    ' ;
    foreach($products as $product) {
      echo '
        <tr class="text-center fs-3">
          <td >'.$product->marca.'</td>
          <td >'.$product->medidas.'</td>
          <td >'.$product->precio.'</td>
          <td >'.$product->categoria.'</td>
          </tr>
          ' ;
        }
        echo ' </tbody>
        </table>
        </div>
        <div class="col">
    
    </div>
    </div>
      </section>' ;
  }

  function renderListProductBy($products,$filter){
    echo "<h1>Lista de ${filter}s</h1><br>";
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo '
        <section class="conteiner">
        <div class="row">
    <div class="col">
    
    </div>
        <div class="col-10">
        <table class="table table-dark table-striped table-sm">
        <thead>
              <tr class="text-center table-primary fs-1">
                <th scope="col">Marca</th>
                <th scope="col">Medida</th>
                <th scope="col">Precio</th>
                
                </tr>
                <thead>
                <tbody>
    ' ;
    foreach($products as $product) {
      echo '
        <tr class="text-center fs-3">
          <td >'.$product->marca.'</td>
          <td >'.$product->medidas.'</td>
          <td >'.$product->precio.'</td>
          
          </tr>
          ' ;
        }
        echo ' </tbody>
        </table>
        </div>
        <div class="col">
    
    </div>
    </div>
      </section>' ;
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