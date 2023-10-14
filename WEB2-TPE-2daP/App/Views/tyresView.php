<?php
require_once './router.php';


class tyresView {

  function __construct(){


  }

  function showHead(){
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
  }

  function showHeader(){
    echo'
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    
    <div class="container-fluid">
    <a class="navbar-brand" href="#">TresA Neumaticos</a>
    <a href="#" class="d-block link-body-emphasis text-decoration-none" aria-expanded="false">
      <img src="'.BASE_URL.'img/icons8-tyre-64.png" alt="mdo" width="32" height="32" class="rounded-circle">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-item">
          <a class="text-white nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="text-white nav-link" href="list">Nuestros Productos</a>
        </li>
        <li class="nav-item dropdown">
        <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Productos por categoria
        </a>
        <ul class="dropdown-menu bg-dark">
        <li><a class="text-secondary dropdown-item" href="filter/cubierta">Cubiertas</a></li>
        <li><a class="text-secondary dropdown-item" href="filter/camara">Camaras</a></li>
        <li><a class="text-secondary dropdown-item" href="filter/llanta">Llantas</a></li>
        </ul>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="about">About</a>
        </li>
      </ul>
      <div class="col-md-3 col-md-auto text-end">
        <a href="login"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
        <a href="register"><button type="button" class="btn btn-outline-warning">Sign-up</button></a>
      </div>
    </div>
    </div>
    </nav>
    ';
    
      }

  function showCRUD($userName){
    echo '
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TresA Neumaticos</a>
        <a href="#" class="d-block link-body-emphasis text-decoration-none" aria-expanded="false">
          <img src="'.BASE_URL.'img/icons8-tyre-64.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item">
              <a class="text-white nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="text-white nav-link" href="list">Nuestros Productos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Productos por categoria
              </a>
              <ul class="dropdown-menu bg-warning">
                <li><a class="dropdown-item" href="filter/cubierta">Cubiertas</a></li>
                <li><a class="dropdown-item" href="filter/camara">Camaras</a></li>
                <li><a class="dropdown-item" href="filter/llanta">Llantas</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <div class="btn-group">
                <button type="button" class="btn btn-danger">Opciones de Administrador</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="add">Agregar Item</a></li>
                  <li><a class="dropdown-item" href="edit">Editar Item</a></li>
                  <li><a class="dropdown-item" href="erase">Eliminar Item</a></li>
                  <li><a class="dropdown-item" href="search">Buscar Item</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                </ul>
              </div>
            </li>
          </ul>
          <div class="col-md-3 col-md-auto text-end">
            <div class="d-flex flex-shrink-0 dropdown align-items-center">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/elgusty3a.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu bg-dark text-small shadow">
                <li><a class="text-secondary dropdown-item" href="#">Nuevo proyecto...</a></li>
                <li><a class="text-secondary dropdown-item" href="#">Configuración</a></li>
                <li><a class="text-secondary dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="text-secondary dropdown-item" href="logout">Cerrar sesión</a></li>
              </ul>
              <div class="align-items-center">
                <p class="text-white mb-0">Bienvenido '.$userName.'</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    ';
  }


  function showLogin(){
    echo '
    <section class="vh-70 gradient-custom">
  <div class="container py-3 h-70">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="" method="POST" class="mb-md-3 mt-md-2 pb-3">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your e-mail and password!</p>
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" name="pass" id="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
              <button class="btn btn-outline-light btn-lg px-5" name="action" value="btnSingInUser" type="submit">Login</button>
            </form>
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
    <section class="vh-80 gradient-custom">
  <div class="container py-3 h-80">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="" method="POST" class="mb-md-3 mt-md-2 pb-3">
              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <p class="text-white-50 mb-3">Please enter your username, e-mail and password!</p>
              <div class="form-outline form-white mb-4">
                <input type="text" name="userName" id="userName" class="form-control form-control-lg" />
                <label class="form-label" for="userName">Username</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" name="pass" id="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
              <button class="btn btn-outline-light btn-lg px-5" name="action" value="btnagregar" type="submit">Register</button>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </form>
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
        <div class="row g-0">
    <div class="col">
    
    </div>
        <div class="col-8">
        <table class="table table-dark table-striped table-sm">
        <thead>
              <tr class="text-center table-primary fs-2">
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
        <tr class="text-center fs-4">
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
        <div class="row g-0">
    <div class="col">
    
    </div>
        <div class="col-8">
        <table class="table table-dark table-striped table-sm">
        <thead>
              <tr class="text-center table-primary fs-2">
                <th scope="col">Marca</th>
                <th scope="col">Medida</th>
                <th scope="col">Precio</th>
                
                </tr>
                <thead>
                <tbody>
    ' ;
    foreach($products as $product) {
      echo '
        <tr class="text-center fs-4">
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
    <form action="" method="GET">
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