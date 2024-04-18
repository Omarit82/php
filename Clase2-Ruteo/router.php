<?php
    require_once 'funciones.php';
    //LEE LA ACCION en la URL
    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'home'; // Esta es la accion por defecto.
    }

    //PARSEO DE LA ACCION
    $parametros = explode('/',$action); //**** suma/1/2 -->['suma',1,2]

    //SWITCH PARA DETERMINAR EL CAMINO A SEGUIR
    switch ($parametros[0]) {
        case 'home':
            home();
            break;
        case 'sumar':
            sumar($parametros[1],$parametros[2]);
            break;
        case 'pi':
            impresionPi();
            break;
        case 'about':
            about();
            break;
        default:
            echo ('404 page not found');
            break;
    }