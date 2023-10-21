<?php
require_once(PATH . '/config.php');
require_once(PATH . '/app/models/motorModel.php');
require_once(PATH . '/app/views/motorView.php');

class MotorController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new MotorModel;
        $this->view = new MotorView;
        session_start();
        if (!isset($_SESSION['logged'])) {
            $_SESSION['logged'] = false;
        }
    }

    public function getProductos()
    {
        $productos = $this->model->getProductos();
        $this->view->showProductos($productos);
    }

    public function getMarcas()
    {
        $marcas = $this->model->getMarcas();
        $this->view->showMarcas($marcas);
    }

    public function addUsuario()
    {
        // Comprobar que los campos no están vacíos
        if (!empty($_POST) && !empty($_POST['Email']) && !empty($_POST['nombre']) && !empty($_POST['password'])) {
            $Email = $_POST['Email'];
            $Nombre = $_POST['nombre'];
            $Password = $_POST['password'];

            // Buscar el email en la tabla de usuarios
            $usuario = $this->getUsuario($Email);

            if (!$usuario) {
                $hash = password_hash($Password, PASSWORD_BCRYPT);
                //guarda los datos en la db
                $usuarioId = $this->model->addUsuario($Email, $Nombre, $hash);
                //redireccionamos a inicio
                header('Location: ' . BASE_URL . 'inicio');
                
                
            } else {
                // $this->view->showError("Ya existe este Email, no insista"); // FALTA showError
            }
        }
    }

    public function getUsuario($Email)
    {
        $usuario = $this->model->getUsuario($Email);
        return $usuario;
    }

    public function showRegistro()
    {
        $this->view->showRegistro();
    }

    public function logout()
    {
        // Destruir la sesión
        session_destroy();

        // Redirigir al usuario a la página de inicio de sesión u otra página
        header('Location: ' . BASE_URL . 'login');
    }

    // INICIO DE SESIÓN DE USUARIO
    public function showLoginForm()
    {
        // Si aún no está logeado
        if (!$_SESSION['logged']) {
            // Mostrar el formulario
            // Si el último instante de actividad fue hace más de x minutos
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
                $this->logout(); // Destruir la sesión y volver al login
            }

            $_SESSION['LAST_ACTIVITY'] = time(); // Actualizar el último instante de actividad
        }

        $this->view->showLoginForm();
    }

    public function validarLogin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            $user = $this->model->getUsuario($userEmail);

            if ($user && password_verify($userPassword, $user->password)) {
                header('Location: ' . BASE_URL . 'inicio');
            } else {
                $user = $this->view->ShowErrorValidar($userEmail);
            }
        }
        
    }
    public function showErrorValidar()
    {
        $this->view->showErrorValidar();
    }
    public function showHome()
    {
        $this->view->showHome();
    }
}
?>
