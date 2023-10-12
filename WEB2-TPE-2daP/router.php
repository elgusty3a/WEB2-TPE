<?php
define ('PATH_SITE', dirname(__FILE__));
// echo '<h1>'.PATH_SITE.'</h1><br>';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// echo '<h2>'.BASE_URL.'</h2>';


require_once './App/Controllers/tyresController.php';


$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) { /* si viene definida la reemplazamos*/
  $action = $_GET['action'];
}

$params = explode('/', $action);
// list    ->         tyresController->showList();
//filter    ->        tyresController->filterBy();
// add   ->         tyresController->addItem();
// erase/:ID  ->     tyresController->removeTask($id);
// edit/:ID  ->    tyresController->edit($id);
// about ->             tyresController->showAbout();
// login ->             tyresController->showLogin();
// logout ->            tyresController->logout();
// auth                 tyresController->auth(); // toma los datos del post y autentica al usuario


switch ($params[0]) {
  case 'list':
      $control= new tyresController();
      $control->showListProducts();
    break;
  case 'filter':
      $control= new tyresController();
      $control->filterBy($params[1],$params[2]);  /*TODO hacer filtro */
    break;
  case 'add':
      $control= new tyresController();
      $control->addItem();
    break;
  case 'edit':
      $control= new tyresController();
      $control->editItem($id);
    break;
  case 'delete':
      $control= new tyresController();
      $control->deleteItem($id);
    break;

  default:
  echo ('404 Page not found');
  break;
}


?>
