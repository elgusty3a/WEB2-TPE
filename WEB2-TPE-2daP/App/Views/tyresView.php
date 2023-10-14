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
      <link rel="icon" type="image/png" href="'.BASE_URL.'img/icons8-tyre-64.png">
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
              <ul class="dropdown-menu bg-dark">
                <li><a class="text-secondary dropdown-item" href="filter/cubierta">Cubiertas</a></li>
                <li><a class="text-secondary dropdown-item" href="filter/camara">Camaras</a></li>
                <li><a class="text-secondary dropdown-item" href="filter/llanta">Llantas</a></li>
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
                  <li><a class="dropdown-item" href="list">Editar o Eliminar Item</a></li>
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
              <!--  <li><a class="text-secondary dropdown-item" href="#">Nuevo proyecto...</a></li> -->
              <!--  <li><a class="text-secondary dropdown-item" href="#">Configuración</a></li> -->
              <!--  <li><a class="text-secondary dropdown-item" href="#">Perfil</a></li> -->
              <!--  <li><hr class="dropdown-divider"></li> -->
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
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    ';
  }




  function renderListProduct($products,$log){
    echo '<h1 class="text-center text-warning">Lista de productos</h1><br>';
    // echo "<a href='index.html'> Volver </a>" ;
    // imprime la tabla de productos
    echo '
        <section class="conteiner">
        <div class="row g-0">
    <div class="col">
    
    </div>
        <div class="col-10">
        <table class="table table-dark table-striped table-sm">
        <thead>
              <tr class="text-center fs-3">
                <th class="text-warning" scope="col">Marca</th>
                <th class="text-warning" scope="col">Medida</th>
                <th class="text-warning" scope="col">Ind. Carga</th>
                <th class="text-warning" scope="col">Ind. Vel.</th>
                <th class="text-warning" scope="col">Precio</th>
                <th class="text-warning" scope="col">Categoria</th>
                ';
                if ($log){
                  echo '
                <th scope="col">Accion</th>
                ';
                }
                echo '
                </tr>
                <thead>
                <tbody>
    ' ;
    foreach($products as $product) {
      echo '
        <tr class="text-center fs-5">
          <td >'.$product->marca.'</td>
          <td >'.$product->medidas.'</td>
          <td >'.$product->indice_carga.'</td>
          <td >'.$product->indice_velocidad.'</td>
          <td >'.$product->precio.'</td>
          <td >'.$product->categoria.'</td>
          ';
          if ($log){
            echo '<td>
            <form action="" method="GET">
              <input type="hidden" name="idProduct" value="'.$product->id_producto.'">
              <input type="hidden" name="marca" value="'.$product->marca.'">
              <input type="hidden" name="medida" value="'.$product->medidas.'">
              <input type="hidden" name="indiceCarga" value="'.$product->indice_carga.'">
              <input type="hidden" name="indiceVelocidad" value="'.$product->indice_velocidad.'">
              <input type="hidden" name="precio" value="'.$product->precio.'">
              <input type="hidden" name="categorias" value="'.$product->categoria.'">
              <button class="btn btn-secondary" type="submit" name="action" value="edit">Edit</button>
              <button class="btn btn-danger" type="submit" name="action" value="erase">Erase</button>
            </form>
            </td>';
          }
          echo '
          </tr>
          ';
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
    echo '<div class="text-center text-warning">';
    echo "<h1>Lista de ${filter}s</h1><br></div>";
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
              <tr class="text-center fs-2">
                <th class="text-warning" scope="col">Marca</th>
                <th class="text-warning" scope="col">Medida</th>
                <th class="text-warning" scope="col">Precio</th>
                
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

  function addItemForm(){
    echo'
    <section class="container bg-success col-12 col-md-8 col-lg-6 col-xl-5">
    <form action="" method="GET">
      <label class="col-form-label" for="marca">Marca:</label>
        <input class="form-control" type="text" name="marca" value="" placeholder="" id="marca" require="marca" /><br />
      <label class="col-form-label" for="medida">Medida:</label>
        <input class="form-control" type="text" name="medida" value="" placeholder="" id="medida" require="medida" /><br />
      
      <label class="col-form-label" for="categoria">Categoria:</label>
        <select name="categorias" id="categorias">
          <option value="1">Cubierta</option>
          <option value="2">Camara</option>
          <option value="3">Llanta</option>
        </select><br>
      <label class="col-form-label" for="precio">Precio:</label>
        <input class="form-control" type="text" name="precio" value="" placeholder="" id="precio" require="precio" /><br />
      <label class="col-form-label" for="indiceCarga">Indice Carga:</label>
        <input class="form-control" type="text" name="indiceCarga" value="" placeholder="" id="indiceCarga"/><br />
      <label class="col-form-label" for="indiceVelocidad">Indice Velocidad:</label>
        <input class="form-control" type="text" name="indiceVelocidad" value="" placeholder="" id="indiceVelocidad" /><br />
      

      <button class="btn btn-secondary" value="btnagregarItem" type="submit" name="action">Agregar</button>

      <!-- <button class="btn btn-info" value="btnbuscar" type="submit" name="action">Buscar</button> -->
      <!-- <button class="btn btn-primary" value="btneditar" type="submit" name="action">Editar</button> -->
      <!-- <button class="btn btn-danger" value="btneliminar" type="submit" name="action">Eliminar Materia</button> -->
      <!-- <button class="btn btn-light" value="btnlimpiar" type="submit" name="action">Limpiar</button> -->
      <!-- <button class="btn btn-light" value="btnarray" type="submit" name="action">array</button> -->
    </form>
    ';
  }
  function editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct){
    echo'
    <section class="container bg-secondary col-12 col-md-8 col-lg-6 col-xl-5">
    <form action="" method="GET">
        <input class="form-control" type="hidden" name="idProduct" value="'.$idProduct.'" placeholder="" id="idProduct" require="idProduct" /><br />
      <label class="col-form-label" for="marca">Marca:</label>
        <input class="form-control" type="text" name="marca" value="'.$marca.'" placeholder="" id="marca" require="marca" /><br />
      <label class="col-form-label" for="medida">Medida:</label>
        <input class="form-control" type="text" name="medida" value="'.$medida.'" placeholder="" id="medida" require="medida" /><br />
        
      <label class="col-form-label" for="categoria">Categoria:</label>
        <select required aria-required="true" name="categorias" id="categorias">
          <option value=""> </option>
          <option value="1">Cubierta</option>
          <option value="2">Camara</option>
          <option value="3">Llanta</option>
        </select><br>
      <label class="col-form-label" for="precio">Precio:</label>
        <input class="form-control" type="text" name="precio" value="'.$precio.'" placeholder="" id="precio" require="precio" /><br />
      <label class="col-form-label" for="indiceCarga">Indice Carga:</label>
        <input class="form-control" type="text" name="indiceCarga" value="'.$indiceCarga.'" placeholder="" id="indiceCarga"/><br />
      <label class="col-form-label" for="indiceVelocidad">Indice Velocidad:</label>
        <input class="form-control" type="text" name="indiceVelocidad" value="'.$indiceVelocidad.'" placeholder="" id="indiceVelocidad" /><br />
      

      <button class="btn btn-warning" value="btneditItem" type="submit" name="action">Edit</button>

      <!-- <button class="btn btn-info" value="btnbuscar" type="submit" name="action">Buscar</button> -->
      <!-- <button class="btn btn-primary" value="btneditar" type="submit" name="action">Editar</button> -->
      <!-- <button class="btn btn-danger" value="btneliminar" type="submit" name="action">Eliminar Materia</button> -->
      <!-- <button class="btn btn-light" value="btnlimpiar" type="submit" name="action">Limpiar</button> -->
      <!-- <button class="btn btn-light" value="btnarray" type="submit" name="action">array</button> -->
    </form>
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