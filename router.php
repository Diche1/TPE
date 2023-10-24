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
    case 'marcas': //muestra listado de categorias
        $motorController->getMarcas();
        break;
    case 'registro': //tiene que mostrar el form
        $motorController->showRegistro();
        break;
    case 'altaUsuario': // agrega el usuario
        $motorController->addUsuario();
        break;
    case 'login':
        $motorController->showLoginForm();
        break;
    case 'validar':
        $motorController->validarLogin();
        break;
    case 'error':
        $motorController->showErrorValidar();
        break;
    case 'producto':
        $motorController->getInfo($params[1]);
        break;
    case 'categoria':
            $motorController->getCategoria($params[1]);
            break;
    default:
        $motorController->showHome();
        break;
}
