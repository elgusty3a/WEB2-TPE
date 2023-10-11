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
// add   ->         tyresController->addTask();
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
  case '':
      
    break;
  case '':
      
    break;
  case '':
      
    break;
  case '':
      
    break;
  case '':
      
    break;
  case '':
      
    break;
  case 'naa':
      
    break;
  default:
  echo ('404 Page not found');
  break;
}


?>
