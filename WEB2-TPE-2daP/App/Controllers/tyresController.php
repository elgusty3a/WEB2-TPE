<?php

require_once './App/Models/tyresModel.php';
require_once './App/Views/tyresView.php';
// require_once './App/Helpers/auth.helper.php';
class tyresController{
  private $model;
  private $view;

  public function __construct(){

    $this->model = new tyresModel();
    $this->view = new tyresView();
  }

  public function showHome(){
    // $products = $this->model->getListProducts();
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    // var_dump($categories);
    // die;
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showCRUD($_SESSION['userName'],$categories);
      //$this->view->renderListProduct($products,$_SESSION['logged']);
    }else{
      $this->view->showHeader($categories);
      //$this->view->renderListProduct($products,false);
    }
    $this->view->bodyHome();
    $this->view->showFooter();
  }
  public function login(){
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showHeader($categories);
    $this->view->showLogin();
    $this->view->showFooter();
  }

  public function singinUser(){
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showHeader($categories);
    if ((!empty($_POST))&&((!empty($_POST['username']) && isset($_POST['username'])) &&( !empty($_POST['pass']) && isset($_POST['pass'])))){
      // if ((!empty($_POST))&&((!empty($_POST['email']) && isset($_POST['email'])) &&( !empty($_POST['pass']) && isset($_POST['pass'])))){
      // $email = $_POST['email'];
      $pass = $_POST['pass'];
      $user = $_POST['username'];
      $existUser = $this->model->singinUser($user);
      // $existUser = $this->model->singinUser($email);
      if($existUser && password_verify($pass, $existUser->pass)){
        session_start();
        $_SESSION['userName']=$existUser->nombreUsuario;
        $_SESSION['email']=$existUser->email;
        $_SESSION['logged']=true;
        header("Location: ".BASE_URL."homeAdmin");
        }else{
          $_SESSION['logged']=false;
        //  var_dump($_SESSION);
          echo 'No no no amiguito!!!';
          $this->view->showLogin();
        }
      }else{
        echo 'copate y completa los datos maquina!!!';
        $this->view->showLogin();
        
      }
      $this->view->showFooter();
    }
    public function homeAdmin(){
      session_start();
      $this->view->showHead();
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $this->view->bodyHome();
      $this->view->showFooter();
  }
  public function register(){
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showHeader($categories);
    $this->view->showRegister();
    $this->view->showFooter();
  }
  public function newUser(){ //*TODO */
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showHeader($categories);
    if (!empty($_POST) && isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['pass'])) {
      $nombreUsuario = $_POST['userName'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $this->model->addUser($nombreUsuario,$email,$pass);
    }
    $this->view->showLogin();
    // $this->view->showRegister();
    $this->view->showFooter();
  }
  public function logout(){
    session_start();
    session_destroy();
    header("Location: ".BASE_URL."home");
  }

  public function showListProducts(){
    session_start();
    $products = $this->model->getListProducts();
    $categories = $this->model->queryCategories();
    // $log=$_SESSION['logged'];
    $this->view->showHead();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $this->view->renderListProduct($products,$_SESSION['logged']);
    }else{
      $this->view->showHeader($categories);
      $this->view->renderListProduct($products,false);
    }
    $this->view->showFooter();

  }

  public function filterBy($filter){
    session_start();
    $products = $this->model->filterBy($filter);
    $this->view->showHead();
    //$this->view->showHeader();
    $categories = $this->model->queryCategories();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showCRUD($_SESSION['userName'],$categories);
      //$this->view->renderListProduct($products,$_SESSION['logged']);
    }else{
      $this->view->showHeader($categories);
      //$this->view->renderListProduct($products,false);
    }
    $this->view->renderListProductBy($products,$filter);
    $this->view->showFooter();
  }
  public function addItem(){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $this->view->addItemForm();
    $this->view->showFooter();
  }
  public function btnagregarItem(){ /*TODO hacer */
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);

    if (!empty($_GET) && (isset($_GET['marca']) && isset($_GET['medida']) && isset($_GET['categorias']))) {
      $marca = $_GET['marca'];
      $medida = $_GET['medida'];
      $categoria = $_GET['categorias'];
      $indiceCarga = $_GET['indiceCarga'];
      $indiceVelocidad = $_GET['indiceVelocidad'];
      $precio = $_GET['precio'];
      $this->model->btnagregarItem($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria);
    }else{
      echo 'Complete los cuadros';
    }
    $log=$_SESSION['logged'];
    $products = $this->model->getListProducts();
    $this->view->renderListProduct($products,$log);
    $this->view->showFooter();
  }

  public function editItem($postEdit){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $idProduct = $_GET['idProduct'];
    $marca = $_GET['marca'];
    $medida = $_GET['medida'];
    $categoria = $_GET['categorias'];
    $indiceCarga = $_GET['indiceCarga'];
    $indiceVelocidad = $_GET['indiceVelocidad'];
    $precio = $_GET['precio'];
    $this->view->editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct);
    $this->view->showFooter();
  }
  public function editCat($getCat){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $idCat = $_GET['id'];
    $categoria = $_GET['categoria'];
    $this->view->editcatForm($categoria,$idCat);
    $this->view->showFooter();
  }
  public function btneditItem($postEdit){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $idProduct = $_GET['idProduct'];
    $marca = $_GET['marca'];
    $medida = $_GET['medida'];
    $categoria = $_GET['categorias'];
    $indiceCarga = $_GET['indiceCarga'];
    $indiceVelocidad = $_GET['indiceVelocidad'];
    $precio = $_GET['precio'];
    $this->model->editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct);
    //$this->view->editItemForm();
    $this->view->showFooter();
  }
  public function btneditCat($getCat){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    // var_dump($getCat);
    // die;
    $idCat = $_GET['idCat'];
    $categoria = $_GET['categoria'];
    $this->model->editCatForm($categoria,$idCat);
    $this->view->showFooter();
  }

  public function eraseItem($getItem){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $id=$getItem['idProduct'];
    $this->model->eraseItem($id);
    $log=$_SESSION['logged'];
    $products = $this->model->getListProducts();
    $this->view->renderListProduct($products,$log);
    $this->view->showFooter();
  }

  public function adminCategories(){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $this->view->adminCategories($categories,$_SESSION['logged']);
    $this->view->showFooter();
  }
  public function addCat(){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $this->view->addCateg();
    $this->view->showFooter();
  }
  public function btnagregarCat($getCat){
    session_start();
    $this->view->showHead();
    $this->model->btnagregarCat($getCat['categoria']);
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $this->view->adminCategories($categories,$_SESSION['userName']);
    $this->view->showFooter();
  }
  public function eraseCat($getCat){
    session_start();
    $this->view->showHead();
    // var_dump($getCat);
    // die;
    $id=$getCat['id'];
    $this->model->eraseCat($id);
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $this->view->adminCategories($categories,$_SESSION['userName']);
    $this->view->showFooter();
  }




}