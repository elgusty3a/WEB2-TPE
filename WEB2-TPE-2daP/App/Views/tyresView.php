<?php
require_once './router.php';
require('libs/Smarty.class.php');


class tyresView {

  private $smart;

  function __construct(){

    $this->smart = new Smarty();
  }

  function showHead(){
    $this->smart->display('templates/head.tpl');
  }

  function showHeader($categorias){
    $this->smart->assign('categorias',$categorias);
    $this->smart->display('templates/nav.tpl');
  }

  function showCRUD($userName,$categorias){
    $this->smart->assign('userName',$userName);
    $this->smart->assign('categorias',$categorias);
    $this->smart->display('templates/navUser.tpl');
  }


  function bodyHome(){
    $this->smart->display('templates/bodyHome.tpl');
  }



  function showLogin(){
    $this->smart->display('templates/showLogin.tpl');
  }
  function showRegister(){
    $this->smart->display('templates/showRegister.tpl');
  }




  function renderListProduct($products,$log){

    $this->smart->assign('products',$products);
    $this->smart->assign('log',$log);
    $this->smart->display('templates/renderListProduct.tpl');
  }
  function details($getDetails,$nav,$log,$categorias){
    $this->smart->assign('products',$getDetails);
    $this->smart->assign('categorias',$categorias);
    $this->smart->assign('nav',$nav);
    $this->smart->assign('userName',$log);
    $this->smart->display('templates/details.tpl');
  }

  function adminCategories($categorias,$log){
    $this->smart->assign('categorias',$categorias);
    $this->smart->assign('log',$log);
    $this->smart->display('templates/adminCategories.tpl');
  }

  function addCateg(){
    $this->smart->display('templates/addCateg.tpl');
  }
  function editcatForm($categoria,$idCat){
    $this->smart->assign('categoria',$categoria);
    $this->smart->assign('idCat',$idCat);
    $this->smart->display('templates/editCatForm.tpl');
  }

  function renderListProductBy($products,$filter){
    $this->smart->assign('products',$products);
    $this->smart->assign('filter',$filter);
    $this->smart->display('templates/renderListBy.tpl');
  }
  function errorDBConect() {
    $this->smart->display('templates/errorDBConnect.tpl');
  }
  function errorEraseCat() {
    echo '<h2 class="bg-danger text-center" Style="color:white;">No se puede eliminar la categoria, tiene articulos reacionados</h2>' ;
  }


  function addItemForm($categorias){
    $this->smart->assign('categorias',$categorias);
    $this->smart->display('templates/addItemForm.tpl');
  }
  function editItemForm($marca,$medida,$indiceCarga,$indiceVelocidad,$precio,$categoria,$idProduct,$categorias){
    $this->smart->assign('marca',$marca);
    $this->smart->assign('medida',$medida);
    $this->smart->assign('indiceCarga',$indiceCarga);
    $this->smart->assign('indiceVelocidad',$indiceVelocidad);
    $this->smart->assign('precio',$precio);
    $this->smart->assign('categoria',$categoria);
    $this->smart->assign('idProduct',$idProduct);
    $this->smart->assign('categorias',$categorias);
    $this->smart->display('templates/editItemForm.tpl');
  }


  function showFooter(){
    $this->smart->display('templates/footer.tpl');
  }

  function about(){
    $this->smart->display('templates/about.tpl');
  }
}