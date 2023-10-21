<?php

require_once './App/Models/tyresModel.php';
require_once './App/Views/tyresView.php';

class tyresController{
  private $model;
  private $view;

  public function __construct(){

    $this->model = new tyresModel();
    $this->view = new tyresView();
  }

  public function showHome(){
    session_start();
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
  
  public function details($getDetails){
    session_start();
    $categories = $this->model->queryCategories();
    if (!empty($_SESSION) && $_SESSION['logged']){
      $log = $_SESSION['userName'];
      $nav = "navUser.tpl";
      $this->view->details($getDetails,$nav,$log,$categories);
    }else{
      $log = "";
      $nav = "nav.tpl";
      $this->view->details($getDetails,$nav,$log,$categories);
    }
    // $this->view->showFooter();
  }

  public function filterBy($filter){
    session_start();
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
    session_start();
    $this->view->showHead();
    $categorias = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categorias);
    $this->view->addItemForm($categorias);
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

  public function editItem($getEdit){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    $idProduct = $getEdit['idProduct'];
    $marca = $getEdit['marca'];
    $medida = $getEdit['medida'];
    $categoria = $getEdit['categorias'];
    $indiceCarga = $getEdit['indiceCarga'];
    $indiceVelocidad = $getEdit['indiceVelocidad'];
    $precio = $getEdit['precio'];
    $this->view->editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct,$categories);
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
    $this->view->showFooter();
  }
  public function btneditCat($getCat){
    session_start();
    $this->view->showHead();
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
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
    $id=$getCat['id'];
    $cat=$getCat['categoria'];
    $productByCat= $this->model->filterBy($cat);
    $categories = $this->model->queryCategories();
    $this->view->showCRUD($_SESSION['userName'],$categories);
    if(!$productByCat){
      $this->model->eraseCat($id);
    }else{
      $this->view->errorEraseCat();
    }
    $this->view->adminCategories($categories,$_SESSION['userName']);
    $this->view->showFooter();
  }

  public function about(){
    session_start();
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