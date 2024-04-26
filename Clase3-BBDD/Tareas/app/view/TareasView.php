<?php
require_once('./libs/Smarty.class.php');
class TareasView { //Es recomendado que el nombre de la clase sea el mismo del archivo
    function __construct(){
        //En este caso el constructor no hace nada
    }
    function mostrar($titulo,$tareas){//Se pone solo mostrar porque es obvio que es mostrar tareas.
        //Agregamos Smarty
        $smarty = new Smarty();
        $smarty->assign('titulo',$titulo);
        $smarty->assign('tareas',$tareas);
        $smarty->display('templates/home.tpl');
    }
}