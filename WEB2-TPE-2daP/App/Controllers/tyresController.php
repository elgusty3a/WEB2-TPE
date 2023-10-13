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
    $this->view->showHeader();
    $this->view->showFooter();
  }
  public function login(){
    // $products = $this->model->getListProducts();
    $this->view->showHeader();
    $this->view->showLogin();
    $this->view->showFooter();
  }
  public function register(){
    // $products = $this->model->getListProducts();
    $this->view->showHeader();
    $this->view->showRegister();
    $this->view->showFooter();
  }

  public function showListProducts(){
    $products = $this->model->getListProducts();
    $this->view->showHeader();
    $this->view->renderListProduct($products);
    $this->view->showFooter();

  }

  public function filterBy($filter){
    $products = $this->model->filterBy($filter);
    $this->view->showHeader();
    $this->view->renderListProductBy($products);
    $this->view->showFooter();
  }
  public function addItem(){ /*TODO hacer */
    $this->view->showHeader();
    $this->view->addItem();
    
    $products = $this->model->addItem();
    $this->view->renderListProduct($products);
    $this->view->showFooter();
  }


}