<?php


class motorModel
{

    private $PDO;
    function __construct()
    {
        $this->PDO = new PDO('mysql:host=localhost;dbname=db_motores;charset=utf8', 'root', '');
        /* Creamos el contructor PDO, para reutilizar  */

    }
    function getProductos()
    {
        $db = $this->PDO;

        $query = $db->prepare('SELECT * FROM productos');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function getMarcas()
    {
        $db = $this->PDO;

        $query = $db->prepare('SELECT * FROM marcas');
        $query->execute();
        $marca = $query->fetchAll(PDO::FETCH_OBJ);
        return $marca;
    }

    function addUsuario($Email, $nombre, $password)
    {
        $db = $this->PDO;
        /* Cambiar en las BD contraseña por password --------------------------------  */
        /* ----------------------------------------------------------------- */
        $query = $db->prepare('INSERT INTO `usuario`(`Email`,`nombre`,`password`) VALUES (?,?,?)');
        $query->execute([$Email, $nombre, $password]);
        return $db->lastInsertId(); 

    }
    function getUsuario($Email)
    {
        $db = $this->PDO;
        $query = $db->prepare('SELECT * FROM `usuario` WHERE `Email`=?');
        $query->execute([$Email]);
        $usuario = $query->fetch(PDO::FETCH_OBJ); //usas fetch porque solo trae un dato.
        return $usuario;
    }
  
}
?>