<?php
define ('PATH_SITE', dirname(__FILE__));
// echo '<h1>'.PATH_SITE.'</h1><br>';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// echo '<h2>'.BASE_URL.'</h2>';


require_once './App/Controllers/tyresController.php';


if (!empty($_GET) && isset($_GET['action']) && !empty($_GET['action'])) { /* si viene definida la reemplazamos*/
  $action = $_GET['action'];
}else{
  $action = 'home'; // acción por defecto
}

$params = explode('/', $action);

// list    ->         tyresController->showList();
// filter    ->        tyresController->filterBy();
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

  //*--------------- Opciones del Nav ------------------
  case 'list':
      $control->showListProducts();
    break;
  case 'filter':
    $control->filterBy($params[1]);  /*TODO hacer filtro */
    break;
    
    //*-------------- login y register--------------------
    case 'login':
      // echo ' hola login';
      $control->login();
      break;
    case 'register':
      // echo ' hola register';
      $control->register();
    break;


    //*-------------- Opciones de admin-------------------
  case 'add':
      $control->addItem();
    break;
  case 'edit':
      $control->editItem($id);
    break;
  case 'delete':
      $control->deleteItem($id);
    break;
  case 'search':
      $control->searchItem();
    break;

  default:
  echo ('404 Page not found');
  break;
}


?>
