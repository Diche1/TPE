<?php
require_once(PATH . '/config.php');
require_once(PATH . '/app/models/motorModel.php');
require_once(PATH . '/app/views/motorView.php');

class motorcontroller
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new motorModel;
        $this->view = new motorView;
        session_start();
        if (!isset($_SESSION['logged'])) {
            $_SESSION['logged'] = false;
        }
    }
    function getProductos()
    {
        $productos = $this->model->getProductos();
        $this->view->showProductos($productos);
    }

    function getMarcas()
    {
        $marcas = $this->model->getMarcas();
        $this->view->showMarcas($marcas);
    }

    function addUsuario()
    {
        /* Se comprueba por post que no este vacio, y luego corrobora los datos uno x uno ( que no esten vacios) */
        if (!empty($_POST) && !empty($_POST['Email']) && !empty($_POST['nombre']) && !empty($_POST['password'])) {
            $Email = $_POST['Email'];
            $Nombre = $_POST['nombre'];
            $Password = $_POST['password'];
            /* BUSCA EL EMAIL EN LA TABLA DE USUARIOS, SI EXISTE DEVUELVE TODOS SUS DATOS, Y SINO "FALSO" */
            $usuario = $this->getUsuario($Email);
            if (!$usuario) {
                $hash = password_hash($Password, PASSWORD_BCRYPT);
                $usuarioId = $this->model->addUsuario($Email, $Nombre, $hash);
            } else {
                /* $this->view->showError("Ya existe este Email, no insista"); TODAVIA NO EXISTE showError, hay que hacerlo y descomentar*/
            }
        }
    }

    function getUsuario($Email)
    {
        $usuario = $this->model->getUsuario($Email);
        return $usuario;
    }

    function showRegistro()
    {
        $this->view->showRegistro();
    }
    //INICIO DE SESIÓN DE USUARIO//
    function showLoginForm()
    {
        //si aun no está logeado
        if (!$_SESSION['logged']) {
            //muestro el formulario
            $this->view->showLoginForm();
        }
    }
    function validarLogin()//Valida el inicio de sesion
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            $user = $this->model->getUsuario($userEmail);

            if ($user && password_verify($userPassword, $user->password )) {
              header('Location: ' . BASE_URL . 'inicio');
            } else {
                echo "Acceso denegado";//crear un smarty para volver al login. Y FALTA funcion para cerrar sesion.
            }
        }
    }
    function showHome()
    {
        $this->view->showHome();
    }
}
