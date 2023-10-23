<?php

require_once './App/Models/tyresModel.php';
require_once './App/Views/tyresView.php';

class tyresController{
  private $model;
  private $view;

  public function __construct(){

    $this->model = new tyresModel();
    $this->view = new tyresView();
    session_start();
        if (!isset($_SESSION['logged'])) {
            $_SESSION['logged'] = false;
        }
  }

  public function showHome(){
    // session_start();
    $this->view->showHead();
    $categorias = $this->model->queryCategories();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showCRUD($_SESSION['userName'],$categorias);
      //$this->view->renderListProduct($products,$_SESSION['logged']);
    }else{
      $this->view->showHeader($categorias);
    }
    $this->view->bodyHome();
    $this->view->showFooter();
  }

  public function showListProducts(){
    // session_start();
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
  
  public function details(){
    // session_start();
    $categories = $this->model->queryCategories();
    $getDetails=$_POST;
    if (!empty($_SESSION) && $_SESSION['logged']){
      $log = $_SESSION['userName'];
      $nav = "navUser.tpl";
      $this->view->details($getDetails,$nav,$log,$categories);
    }else{
      $log = "";
      $nav = "nav.tpl";
      $this->view->details($getDetails,$nav,$log,$categories);
    }
  }

  public function filterBy($filter){
    // session_start();
    $products = $this->model->filterBy($filter);
    $this->view->showHead();
    //$this->view->showHeader();
    $categories = $this->model->queryCategories();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showCRUD($_SESSION['userName'],$categories);
    }else{
      $this->view->showHeader($categories);
    }
    $this->view->renderListProductBy($products,$filter);
    $this->view->showFooter();
  }
  public function addItem(){
    // session_start();
  if (!empty($_SESSION) && $_SESSION['logged']){
    $this->view->showHead();
    $categorias = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categorias);
    $this->view->addItemForm($categorias);
  }else{
    header("location: login");
  }
    $this->view->showFooter();
  }
  public function btnagregarItem(){ /*TODO hacer */
    // session_start();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showHead();
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      if (!empty($_POST) && (isset($_POST['marca']) && isset($_POST['medida']) && isset($_POST['categorias']))) {
        $marca = $_POST['marca'];
        $medida = $_POST['medida'];
        $categoria = $_POST['categorias'];
        $indiceCarga = $_POST['indiceCarga'];
        $indiceVelocidad = $_POST['indiceVelocidad'];
        $precio = $_POST['precio'];
        $this->model->btnagregarItem($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria);
      }else{
        echo 'Complete los cuadros';
      }
      $log=$_SESSION['logged'];
      $products = $this->model->getListProducts();
      $this->view->renderListProduct($products,$log);
    }else{
      header("location: login");
    }
    $this->view->showFooter();
  }

  public function editItem(){
    // session_start();
    $this->view->showHead();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $idProduct = $_POST['idProduct'];
      $marca = $_POST['marca'];
      $medida = $_POST['medida'];
      $categoria = $_POST['categorias'];
      $indiceCarga = $_POST['indiceCarga'];
      $indiceVelocidad = $_POST['indiceVelocidad'];
      $precio = $_POST['precio'];
      $this->view->editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct,$categories);
    }else{
      header("location: login");
    }
    $this->view->showFooter();
  }
  public function editCat(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      // var_dump($_POST);
      // die;
      if (!empty($_POST) && !empty($_POST["id"]) && !empty($_POST["categoria"])) {
        $categories=$this->model->queryCategories();
        $this->view->showCRUD($_SESSION['userName'],$categories);
        $idCat = $_POST['id'];
        $categoria = $_POST['categoria'];
        $this->view->editCatForm($categoria, $idCat);
      } else{
        echo "Todos los datos son requeridos.";
      }
    }else{
      header("location: login");
    }
  }
  public function btneditItem(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      $idProduct = $_POST['idProduct'];
      $marca = $_POST['marca'];
      $medida = $_POST['medida'];
      $categoria = $_POST['categorias'];
      $indiceCarga = $_POST['indiceCarga'];
      $indiceVelocidad = $_POST['indiceVelocidad'];
      $precio = $_POST['precio'];
      $this->model->editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct);
      header("Location: list");
    }else{
      header("location: login");
    }
  }
  public function btneditCat(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showHead();
      $categories = $this->model->queryCategories();
      $idCat = $_POST['idCat'];
      $categoria = $_POST['categoria'];
      $this->model->editCatForm($categoria,$idCat);
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $this->view->adminCategories($categories,$_SESSION['logged']);
      $this->view->showFooter();
    }else{
      header("location: login");
    }
  }

  public function eraseItem(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      if (!empty($_POST) && !empty($_POST["idProduct"])) {
        $id = $_POST['idProduct'];
        $this->model->eraseItem($id);
        header("Location: list");
      }
      else {
      echo "Todos los datos son requeridos.";
      }
    }else{
      header("location: login");
    }
  }

  public function adminCategories(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showHead();
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $this->view->adminCategories($categories,$_SESSION['logged']);
      $this->view->showFooter();
    }else{
      header("location: login");
    }
  }
  public function addCat(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showHead();
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $this->view->addCateg();
      $this->view->showFooter();
    }else{
      header("location: login");
    }
  }
  public function btnagregarCat(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showHead();
      $postCateg=$_POST['categoria'];
      $this->model->btnagregarCat($postCateg);
      $categories = $this->model->queryCategories();
      $this->view->showCRUD($_SESSION['userName'],$categories);
      $this->view->adminCategories($categories,$_SESSION['userName']);
      $this->view->showFooter();
    }else{
      header("location: login");
    }
  }
  public function eraseCat(){
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showHead();
      $id=$_POST['id'];
      $cat=$_POST['categoria'];
      $productByCat= $this->model->filterBy($cat);
      $categories = $this->model->queryCategories();
      if(!$productByCat){
        $this->model->eraseCat($id);
        $categories = $this->model->queryCategories();
        $this->view->showCRUD($_SESSION['userName'],$categories);
        $this->view->adminCategories($categories,$_SESSION['userName']);
        $this->view->showFooter();
      }else{
        $this->view->errorEraseCat();
      }
    }else{
      header("location: login");
    }
  }

  public function about(){
    // session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $this->view->showCRUD($_SESSION['userName'],$categories);
    }else{
      $this->view->showHeader($categories);
    }
    $this->view->about();
    $this->view->showFooter();

  }




}