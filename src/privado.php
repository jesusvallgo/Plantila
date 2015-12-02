<?php
    require 'define.php';
    require DIR_SISTEMA.'/alias.php';
    require DIR_SISTEMA.'/nombreControlador.php';
    require DIR_BD.'/operacionesBD.php';
    require DIR_INTERCEPTOR.'/interceptorAutenticacion.php';

    $claseNombreControlador = new nombreControlador();
    $nombreControlador = $claseNombreControlador->nombreControlador();

    require $nombreControlador;
?>