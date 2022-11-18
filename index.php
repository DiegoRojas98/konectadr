<?php 

    /* manejo de rutas y controladores */

    function cargarControlador($controlador = ""){
        $nombreControlador = $controlador . "Controller";
        $archivoControlador = "controller/" . $nombreControlador . ".php";

        if(!is_file($archivoControlador)){
            require_once "controller/productosController.php";
            $control = new productosController();
            return $control;
        }else{
            require_once "$archivoControlador";
            $control = new $nombreControlador();
            return $control;
        }


    }

    if(isset($_GET['c'])){
        $control = cargarControlador($_GET['c']);
    }else{
        $control = cargarControlador();
    }

?>