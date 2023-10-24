<?php

require_once(PATH . '/libs/smarty/Smarty.class.php');

class motorview
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty;
        $this->smarty->assign('BASE_URL', BASE_URL);
    }

    function showProductos($productos)
    {
        $this->smarty->assign('productos', $productos);
        $this->smarty->display(PATH . '/templates/showProductos.tpl');
    }

    function showMarcas($marcas)
    {

        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display(PATH . '/templates/showMarcas.tpl');
    }

    function showRegistro()
    {
        $this->smarty->display(PATH . '/templates/showRegistro.tpl');
    }
    function showHome()
    {
        $this->smarty->assign('logged', $_SESSION['logged']);
        $this->smarty->display(PATH . '/templates/showHome.tpl');
    }
    function showLoginForm()
    {
        $this->smarty->assign('logged', $_SESSION['logged']);
        $this->smarty->display(PATH . '/templates/showLogin.tpl');
    }
    function  showErrorValidar()
    {
        $this->smarty->assign('logged', $_SESSION['logged']);
        $this->smarty->display(PATH . '/templates/errorValidacion.tpl');
    }
    function showInfo($detalles)
    {
        $this->smarty->assign('detalles', $detalles);
        $this->smarty->display(PATH . '/templates/showDetalles.tpl');
    }
    function showCategoria($categorias)
    {
        $this->smarty->assign('categorias', $categorias);
    }
    // filtrado por fabricante 
    function showFiltro($productos)
    {
        $this->smarty->assign('productos', $productos);
        // var_dump($productos);
        $this->smarty->display(PATH . '/templates/filtroMarca.tpl');
    }
}
