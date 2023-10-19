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
        /*session_start();*/
        /*if (!isset($_SESSION['logged'])) {
            $_SESSION['logged'] = false;
        }*/
    }
    function getProductos()
    {
        $productos = $this->model->getProductos();
        $this->view->showProductos($productos);
    }

    function getCategorias()
    {
        $categorias = $this->model->getCategorias();
        $this->view->showCategorias($categorias);
    }

    /*function getArticles()
    {
        //Busco todos los articulos .
        $articles = $this->model->getArticles();
        //si existen articulos:
        if ($articles) {
            //los muestro
            $this->view->showArticles($articles);
        } else {
            //si no existen: muestra el mensaje.
            $this->view->showError("No se encontraron artículos.");
        }
    }
    function getCategories()
    {
        //busco las categorías
        $categories = $this->model->getCategories();
        //si existen categorias
        if ($categories) {
            //las muestro
            $this->view->showCategories($categories);
        } else {
            //si no existen, muestro error.
            $this->view->showError("No se encontraron categorías.");
        }
    }
    function getCategoryId($cat)
    {
        $category = $this->model->getCategoryIdByName($cat);
        //si la categoría existe, busco sus articulos en base al id de categoria:
        if ($category) {
            $articles = $this->model->getArticlesByCategory($category->id_categoria);
            //si tiene articulos: Los muestro
            if ($articles) {
                $this->view->showArticles($articles);
            } else {
                //si existe la categoría pero no hay articulos:
                $this->view->showError("No se encontraron artículos para la categoría");
            }
        } else {
            //si no existe la categoría:
            $this->view->showError("Categoría no encontrada.");
        }
    }
    function getItemDetails($item_id)
    {
        //busco detalles para un item ID
        $details = $this->model->getItemDetails($item_id);
        if ($details) {
            //si los encontró, muestra:
            $this->view->showItemDetails($details);
        } else {
            //si no encontró articulo con el ID dado:
            $this->view->showError("Artículo no encontrado");
        }
    }*/
    function showHome()
    {
        $this->view->showHome();
    }
    /*function showLoginForm()
    {
        //si aun no está logeado
        if (!$_SESSION['logged']) {
            //muestro el formulario
            $this->view->showLoginForm();
        } else {
            //sino, mando al inicio. (solo podría darse este caso si el usuario ya logeado cambia o escribe la URL "/login" a mano.)
            header('Location: ' . BASE_URL . 'inicio');
        }
    }
    function showEditForm($tipo, $id)
    {
        //si está logeado:
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //en base al tipo que quiera modificar (articulos o categorias)
            switch ($tipo) {
                case 'articulos':
                    //traigo los detalles del articulo indicado, y todas las categorias disponibles de la DB
                    $article = $this->model->getItemDetails($id);
                    $categories = $this->model->getCategories();
                    //si existen categorias en la DB:
                    if ($categories) {
                        //si el articulo existe, muestro el formulario de edición
                        if ($article) {
                            $this->view->showArticlesEditForm($id, $article, $categories);
                        } else {
                            //si no existe, da error.
                            $this->view->showError('Articulo inexistente.');
                        }
                    } else {
                        //si no existen categorías en la DB: se pide que primero se cree una categoría.
                        $this->view->showError('No hay categorias disponibles para asignarle al articulo. Creá primero una categoría.');
                    }
                    break;
                case 'categorias':
                    $category = $this->model->getCategoryById($id);
                    //si se encontró la categoría por ID:
                    if ($category) {
                        //muestro formulario para su edición.
                        $this->view->showCategoriesEditForm($id, $category);
                    } else {
                        //sino: muestro error.
                        $this->view->showError('Categoria inexistente.');
                    }
                    break;
                    default:
                    //si la acción es para editar algo que no sea articulos ni categorías, envío al home.
                    header('Location: ' . BASE_URL . 'inicio');
                }
            } else {
                //si no está logeado, también envío al inicio.
                header('Location: ' . BASE_URL . 'inicio');
            }
        }
        
        function editArticle($id)
        {
            //si está logeado
            if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                //si el post viene con datos y estan seteados los campos requeridos para un articulo:
                if (!empty($_POST) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['alto']) && isset($_POST['ancho']) && isset($_POST['profundidad']) && isset($_POST['id_categoria'])) {
                    //agarro todos los datos en variables individuales.
                    $nombre = $_POST['nombre'];
                    $precio = $_POST['precio'];
                    $alto = $_POST['alto'];
                    $ancho = $_POST['ancho'];
                    $profundidad = $_POST['profundidad'];
                $id_categoria = $_POST['id_categoria'];
                //imgPath por defecto queda vacío porque no es requerido.
                $imagePath = '';
                //obtengo el articulo por ID
                $article = $this->model->getItemDetails($id);
                //si el articulo existe:
                if ($article) {
                    //si se adjuntó una imagen del articulo, la guardo y seteo el imagePath correspondiente (antes era un string vacío).
                    if (!empty($_FILES)) {
                        
                        $name = $_FILES['image']["name"][0];
                        $tmpName = $_FILES['image']["tmp_name"][0];
                        $imagePath = "images/" . $name;
                        move_uploaded_file($tmpName, $imagePath);
                    }
                    //por ultimo, guardo los datos del articulo. Si no tiene archivo, imagePath es un string vacío.
                    $this->model->setArticle($id, $nombre, $precio, $alto, $ancho, $profundidad, $id_categoria, $imagePath);
                } else {
                    //si el articulo no existe, muestro error:
                    $this->showError("Articulo inexistente.");
                }
            }
        }
        //envío a la lista de artículos al usuario en donde ya se refleja el cambio realizado.
        header('Location: ' . BASE_URL . 'articulos');
    }
    function editCategory($id)
    {
        //si el usuario está logeado
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //si el post viene con datos y estan seteados los campos requeridos para una categoría (el tipo):
            if (!empty($_POST) && isset($_POST['tipo'])) {
                //guardo el tipo en una variable individual
                $tipo = $_POST['tipo'];
                //busco la categoría por ID
                $category = $this->model->getCategoryById($id);
                //si la categoría existe:
                if ($category) {
                    //edito la misma.
                    $this->model->setCategory($id, $tipo);
                } else {
                    $this->view->showError("Categoría inexistente.");
                }
            }
        }
        //envio al usuario al listado de categorías
        header('Location: ' . BASE_URL . 'categorias');
    }
    function remove($tipo, $id)
    {
        //verificamos si está logeado
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //en base al tipo que quiera borrar (articulos o categorias)
            switch ($tipo) {
                case 'articulos':
                    //busco el articulo en base al ID
                    $article = $this->model->getItemDetails($id);
                    //si existe:
                    if ($article) {
                        //lo borro y envio al usuario al listado de articulos
                        $this->model->removeArticle($id);
                        header('Location: ' . BASE_URL . 'articulos');
                    } else {
                        //si no existe el articulo, doy error.
                        $this->showError('Artículo inexistente.');
                    }
                    break;
                    case 'categorias':
                        //busco la categoria por el ID.
                        $category = $this->model->getCategoryById($id);
                        //si existe:
                    if ($category) {
                        //busco los articulos para esa categoría
                        $articles = $this->model->getArticlesByCategory($category->id_categoria);
                        //si no tiene articulos
                        if (!$articles) {
                            //borro la categoria y envio al usuario a la lista de categorias.
                            $this->model->removeCategory($id);
                            header('Location: ' . BASE_URL . 'categorias');
                        } else {
                            //si tiene articilos relacionados, doy error.
                            $this->showError('La categoría tiene artículos relacionados.');
                        }
                    } else {
                        //si la categoria no existe, doy error.
                        $this->showError('Categoria inexistente.');
                    }
                    break;
                default:
                    header('Location: ' . BASE_URL . 'inicio');
            }
        } else {
            //si el criterio a remover no es articulos ni categorias, lo envio al inicio.
            header('Location: ' . BASE_URL . 'inicio');
        }
    }

    function showArticleAddForm()
    {
        //verificamos si está logeado
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //buscamos todas las categorías de la dB.
            $categories = $this->model->getCategories();
            //si existen categorias, muestro el formulario para añadir articulos y le paso todas las categorías para el select.
            if ($categories) {
                $this->view->showArticleAddForm($categories);
            } else {
                $this->view->showError("No hay categorias disponibles para asignarle al articulo. Creá primero una categoría.");
            }
        } else {
            //si no está logeado, lo envío al inicio.
            header('Location: ' . BASE_URL . 'inicio');
        }
    }
    function showCategoryAddForm()
    {
        //verificamos si está logeado
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //muestro formulario para añadir categorías:
            $this->view->showCategoryAddForm();
        } else {
            //si no está logeado, lo envío al inicio.
            header('Location: ' . BASE_URL . 'inicio');
        }
    }

    function addArticle()
    {
        //verificamos si está logeado
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //verificamos si el post no está vacío y si trae todos los datos requeridos
            if (!empty($_POST) && !empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['alto']) && !empty($_POST['ancho']) && !empty($_POST['profundidad']) && !empty($_POST['id_categoria'])) {
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $alto = $_POST['alto'];
                $ancho = $_POST['ancho'];
                $profundidad = $_POST['profundidad'];
                $id_categoria = $_POST['id_categoria'];
                //imgPath por defecto queda vacío porque no es requerido.
                $imagePath = '';
                //si hay un archivo adjunto, lo subo y guardo el path en la variable imagePath                
                if (!empty($_FILES)) {

                    $name = $_FILES['image']["name"][0];
                    $tmpName = $_FILES['image']["tmp_name"][0];
                    $imagePath = "images/" . $name;
                    move_uploaded_file($tmpName, $imagePath);
                }
                //añado el articulo.
                $this->model->addArticle($nombre, $precio, $alto, $ancho, $profundidad, $id_categoria, $imagePath);
            } else {
                //si faltó algun dato, doy error.
                $this->showError("Todos los campos son obligatorios.");
            }
        }
        //si no está logeado, enviamos al usuario al inicio
        header('Location: ' . BASE_URL . 'articulos');
    }
    function addCategory()
    {
        //verificamos si está logeado para realizar esta acción:
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //si el post trae datos y trae un valor en el campo tipo
            if (!empty($_POST) && !empty($_POST['tipo'])) {
                //lo guardamos en una variable individual
                $tipo = $_POST['tipo'];
                //añadimos la nueva categoría
                $this->model->addCategory($tipo);
            } else
                //si tipo está vacía:
                $this->showError("Todos los campos son obligatorios.");
        }
        //si no está logeado, enviamos al usuario al inicio
        header('Location: ' . BASE_URL . 'categorias');
    }
    function showRegisterForm()
    {
        //verificamos si está logeado para realizar esta acción:
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //mostramos el formulario de registro.
            $this->view->showRegisterForm();
        } else {
            //si no está logeado, enviamos al usuario al inicio
            header('Location: ' . BASE_URL . 'inicio');
        }
    }

    function registerUser()
    {
        //verificamos si está logeado para realizar esta acción:
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            //si el post no está vacío y trae los datos requeridos para el registro:
            if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['password'])) {
                //guardo los datos en variables individuales.
                $email = $_POST['email'];
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                // Realiza la verificación del usuario en la base de datos
                $user = $this->model->getUser($email);
                //si no existe el usuario y la password tiene 8 o más caracteres:
                if (!$user) {
                    if (strlen($password) >= 8) {
                        //encriptamos la password:
                        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                        //guarda los datos del nuevo usuario en la DB
                        $this->model->registerUser($email, $nombre, $hashedPassword);
                        //enviamos al usuario al inicio
                        header('Location: ' . BASE_URL . 'inicio');
                    } else {
                        $this->view->showError("La contraseña debe tener al menos 8 caracteres.");
                    }
                } else {
                    //si el usuario ya existe:
                    $this->view->showError('El usuario ya existe.');
                }
            } else {
                //si faltan datos en el post:
                $this->view->showError('Todos los campos son obligatorios.');
            }
        } else {
            header('Location: ' . BASE_URL . 'inicio');
        }
    }
    function signIn()
    {
        //si el post no está vacío y trae los datos requeridos para el login:
        if (!empty($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
            //guardo los datos en variables individuales.
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Realiza la verificación del usuario en la base de datos
            $user = $this->model->getUser($email);
            //Si el usuario existe y la password coincide:
            if ($user && password_verify($password, $user->password)) {
                // Inicio de sesión exitoso
                $_SESSION['email'] = $user->email;
                $_SESSION['nombre'] = $user->nombre;
                $_SESSION['logged'] = true;
                header('Location: ' . BASE_URL . 'inicio');
            } else {
                // Usuario y/o contraseña inválidos
                $_SESSION['logged'] = false;
                $this->view->showError('Usuario y/o contraseña inválidos.');
            }
        } else {
            // Todos los campos son requeridos
            $this->view->showError('Todos los campos son requeridos.');
        }
    }

    function showError($error)
    {
        //muestra un mensaje de error
        $this->view->showError($error);
    }

    function logout()
    {
        //destruye la sesion
        session_destroy();
        //la vuelve a crear vacía
        session_start();
        //setea la variable logged en false por defecto.
        //es la que se compara siempre para ver si el usuario está logeado o no.
        $_SESSION['logged'] = false;
        //lleva al usuario al inicio.
        header('Location: ' . BASE_URL . 'inicio');
    }*/
}


?>