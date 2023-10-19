<?php
//defino las URL de la raiz para poder utilizar URL semanticas correctamente
define('PATH', dirname(__FILE__));
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
//relaciono al controlador
require_once(PATH . '/config.php');
require_once(PATH . '/app/controller/motorController.php');
$motorController = new MotorController;

//leo la acción que viene en el GET. Si no viene nada, le asigno showHome
if (!empty($_GET) && isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
} else
    $action = 'inicio';

//parseamos (separamos) la accion
$params = explode('/', $action);

//Si viene un post, ejecuto el registro (esto va luego en el switch case!)


switch ($params[0]) {
    case 'inicio': //muestro el inicio
        $motorController->showHome();
        break;
    case 'productos': //muestra listado de articulos
        $motorController->getProductos();
        break;
    case 'categorias': //muestra listado de categorias
        $motorController->getMarcas();
        break;
    default: $motorController->showHome();
}


?>