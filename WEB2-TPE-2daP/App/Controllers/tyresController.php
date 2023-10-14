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
    $this->view->showHead();
    $this->view->showHeader();
    $this->view->showFooter();
  }
  public function login(){
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $this->view->showHeader();
    $this->view->showLogin();
    $this->view->showFooter();
  }

  public function singinUser(){
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $this->view->showHeader();
    if ((!empty($_POST))&&((!empty($_POST['email']) && isset($_POST['email'])) &&( !empty($_POST['pass']) && isset($_POST['pass'])))){
      echo ' estoy en el if';
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $existUser = $this->model->singinUser($email);
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
      $this->view->showCRUD($_SESSION['userName']);
      $this->view->showFooter();
  }
  public function register(){
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $this->view->showHeader();
    $this->view->showRegister();
    $this->view->showFooter();
  }
  public function newUser(){ //*TODO */
    // $products = $this->model->getListProducts();
    $this->view->showHead();
    $this->view->showHeader();
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
    $products = $this->model->getListProducts();
    $this->view->showHead();
    $this->view->showHeader();
    $this->view->renderListProduct($products);
    $this->view->showFooter();

  }

  public function filterBy($filter){
    $products = $this->model->filterBy($filter);
    $this->view->showHead();
    $this->view->showHeader();
    $this->view->renderListProductBy($products,$filter);
    $this->view->showFooter();
  }
  public function addItem(){ /*TODO hacer */
    session_start();
    $this->view->showHead();
    $this->view->showCRUD($_SESSION['userName']);
    $this->view->addItem();
    $products = $this->model->addItem();
    $this->view->renderListProduct($products);
    $this->view->showFooter();
  }


}