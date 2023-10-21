<?php

require_once './App/Models/tyresModel.php';
require_once './App/Views/tyresView.php';

class loginController{

  private $view;
  private $model;

  public function __construct(){

    $this->model = new tyresModel();
    $this->view = new tyresView();
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
          echo '<h1 class="text-center">No no no amiguito!!!</h1>';
          $this->view->showLogin();
        }
      }else{
        echo '<h1 class="text-center">Copate y completa los datos maquina!!!</h1>';
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
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showHeader($categories);
    $this->view->showRegister();
    $this->view->showFooter();
  }
  public function newUser(){
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
    $this->view->showFooter();
  }
  public function logout(){
    session_start();
    session_destroy();
    header("Location: ".BASE_URL."home");
  }




}


?>