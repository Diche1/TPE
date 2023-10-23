<?php

require_once(PATH . '/libs/smarty/Smarty.class.php');

Class motorview
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

    function showRegistro(){
        $this->smarty->display(PATH . '/templates/showRegistro.tpl');
    }
     function showHome(){
        //$this->tpl->assign('logged', $_SESSION['logged']);
        $this->smarty->display(PATH . '/templates/showHome.tpl');
    }
    function showLoginForm(){
        //$this->tpl->assign('logged', $_SESSION['logged']);
        $this->smarty->display(PATH . '/templates/showLogin.tpl');
    }
    function  showErrorValidar(){
        //$this->tpl->assign('logged', $_SESSION['logged']);
        $this->smarty->display(PATH . '/templates/errorValidacion.tpl');
    }
    function showInfo($detalles){
        $this->smarty->assign('detalles', $detalles);
        $this->smarty->display(PATH . '/templates/showDetalles.tpl');
    }
}
?>