<?php

class ConfigApp{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=>'TareasController#home',
        'home'=>'TareasController#home',
        'tareas'=>'TareasController#home',
        'agregarTarea'=>'TareasController#create',
        'guardarTarea'=>'TareasController#insertTarea',
        'borrarTarea'=>'TareasController#eraseTarea',
        'finalizarTarea'=>'tareasController#finish',
        'login'=>'LoginCotroller#index',
        'verificarUsuario'=>'LoginController#verify',
        'logout'=>'LoginController#destroy'
    ];
}