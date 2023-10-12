<?php
define ('PATH_SITE', dirname(__FILE__));
// echo '<h1>'.PATH_SITE.'</h1><br>';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// echo '<h2>'.BASE_URL.'</h2>';


require_once './App/Controllers/tyresController.php';


$action = 'home'; // acción por defecto
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

$control= new tyresController();

switch ($params[0]) {
  case 'home':
    $control->showHome();
    break;
  case 'list':
      $control->showListProducts();
    break;
  case 'filter':
//     var_dump($params);
// die;
    $control->filterBy($params[1]);  /*TODO hacer filtro */
    break;
  case 'add':
      $control->addItem();
    break;
  case 'edit':
      $control->editItem($id);
    break;
  case 'delete':
      $control->deleteItem($id);
    break;

  default:
  echo ('404 Page not found');
  break;
}


?>
