<?php
    require_once 'index.php';
    require_once 'tareas.php';
    //LEE LA ACCION en la URL
    if (!empty($_GET['action'])){
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
        case 'add':
            insertTarea();
            break;
        case 'erase':
            eraseTarea($parametros[1]);
            break;
        default:
            echo ('404 page not found');
            break;
    }