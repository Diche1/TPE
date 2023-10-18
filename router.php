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
    case 'articulos': //muestra listado de articulos
        $muebloideController->getArticles();
        break;
    case 'categorias': //muestra listado de categorias
        $muebloideController->getCategories();
        break;
    case 'buscar': //muestra todos los articulos dado un tipo (nombre de una categoria)
        $muebloideController->getCategoryId($params[1]);
        break;
    case 'detalles': //muestra detalles de un articulo dado un id
        $muebloideController->getItemDetails($params[1]);
        break;
    case 'editar': //muestra formulario de edicion (solo admin)
        $tipo=$params[1];
        $id=$params[2];
        $muebloideController->showEditForm($tipo,$id);
        break;
    case 'eliminar': //elimina si es posible (solo admin)
        $tipo=$params[1];
        $id=$params[2];
        $muebloideController->remove($tipo,$id);
        break;
    case 'editarArticulo': //edita articulo (solo admin, viene del post de formEditArticle.tpl)
        $muebloideController->editArticle($params[1]);
        break;
    case 'editarCategoria': //edita articulo (solo admin, viene del post de formEditArticle.tpl)
        $muebloideController->editCategory($params[1]);
        break;
    case 'nuevoArticulo': //muestra formulario para el alta de un articulo (solo admin)
        $muebloideController->showArticleAddForm();
        break;
    case 'nuevaCategoria': //muestra formulario para el alta de una categoria (solo admin)
        $muebloideController->showCategoryAddForm();
        break;
    case 'addArticle': //muestra formulario para el alta de un articulo (solo admin)
        $muebloideController->addArticle();
        break;
    case 'addCategory': //muestra formulario para el alta de una categoria (solo admin)
        $muebloideController->addCategory();
        break;
    case 'login': //muestra formulario de login
        $muebloideController->showLoginForm();
        break;
    case 'registrar': //muestra formulario de registro (SOLO ADMINS)
        $muebloideController->showRegisterForm();
        break;
    case 'altaUsuario': //Registra usuario (SOLO ADMIN, viene del post de formRegister.tpl)
        $muebloideController->registerUser();
        break;
    case 'auth': //inicia sesión
        $muebloideController->signIn();
        break;
    case 'logout': //cierra sesión
        $muebloideController->logout();
        break;
    default: //si no viene ninguna acción válida, muestra error 404.
        $muebloideController->showError('cuatrocientos cuatro 😅');

}

?>