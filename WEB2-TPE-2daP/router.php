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
// filter    ->       tyresController->filterBy();
// add   ->           tyresController->addItem();
// erase/:ID  ->      tyresController->removeTask($id);
// edit/:ID  ->       tyresController->edit($id);
// login ->           tyresController->showLogin();
// register ->        tyresController->register(); // toma los datos del post y autentica al usuario
// logout ->          tyresController->logout();
// about ->           tyresController->showAbout();

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
    $control->filterBy($params[1]);
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
    case 'logout':  /*TODO hacer */
      // echo ' hola register';
      $control->logout(); 
    break;


    //*-------------- Opciones de admin-------------------
  case 'add':
      $control->addItem();  /*TODO hacer */
    break;
  case 'edit':
      $control->editItem($id);  /*TODO hacer */
    break;
  case 'delete':
      $control->deleteItem($id);  /*TODO hacer */
    break;
  case 'search':
      $control->searchItem(); /*TODO hacer */
    break;

  default:
  echo ('404 Page not found');
  break;
}


?>
