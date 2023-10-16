<?php
define ('PATH_SITE', dirname(__FILE__));
// echo '<h1>'.PATH_SITE.'</h1><br>';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// echo '<h2>'.BASE_URL.'</h2>';


require_once './App/Controllers/tyresController.php';
require_once './App/Controllers/loginController.php';


if (!empty($_GET) && isset($_GET['action']) && !empty($_GET['action'])) { /* si viene definida la reemplazamos*/
  $action = $_GET['action'];
}else{
  $action = 'home'; // acción por defecto
}
if (!empty($_POST) && isset($_POST['action']) && !empty($_POST['action'])) { /* si viene definida la reemplazamos*/
  $action = $_POST['action'];
}

$params = explode('/', $action);

// list    ->         tyresController->showList();
// filter    ->       tyresController->filterBy();

// login ->           tyresController->showLogin();
// register ->        tyresController->register(); // toma los datos del post y autentica al usuario
// logout ->          tyresController->logout();

// add   ->           tyresController->addItem();
// edit/:ID  ->       tyresController->edit($id);
// erase/:ID  ->      tyresController->eraseItem($id);
// search/:ID  ->     tyresController->searchItem($id);


// about ->           tyresController->showAbout();

$control= new tyresController();
$controlUser= new loginController();

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
  case 'about':
    $control->about();
    break;

    //*-------------- login y register--------------------
    case 'login':
      $controlUser->login();
      break;
    case 'btnSingInUser':
      $controlUser->singinUser();
      break;
    case 'register':
      $controlUser->register();
    break;
    case 'btnagregar':
      $controlUser->newUser();
    break;
    case 'logout':
      $controlUser->logout();
    break;
    case 'homeAdmin':
      $controlUser->homeAdmin();
    break;

    //*-------------- Opciones de admin-------------------
  case 'add':
      $control->addItem();
    break;
  case 'btnagregarItem':
      $control->btnagregarItem();
    break;
  case 'edit':
    $control->editItem($_GET);
    break;
  case 'btneditItem':
    $control->btneditItem($_GET);
    break;
  case 'erase':
      $control->eraseItem($_GET);
    break;
  case 'adminCategories':
      $control->adminCategories();
    break;
  case 'addCat':
      $control->addCat();
    break;
  case 'btnagregarCat':
      $control->btnagregarCat($_GET);
    break;
  case 'eraseCat':
      $control->eraseCat($_GET);
    break;
  case 'editCat':
      $control->editCat($_GET);
    break;
  case 'btneditCat':
      $control->btneditCat($_GET);
    break;

  default:
  echo ('404 Page not found');
  break;
}


?>
