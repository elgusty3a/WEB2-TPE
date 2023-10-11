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

  public function showListProducts(){
    $products = $this->model->getListProducts();
    $this->view->renderListProduct($products);

  }


}