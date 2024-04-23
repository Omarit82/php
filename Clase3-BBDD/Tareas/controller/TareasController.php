<?php
require_once './view/TareasView.php';
require_once './model/TareasModel.php';
class TareasController{
    //El controlador va a tener una instancia de la clase vista
    private $vista; 
    private $modelo;
    private $titulo;

    function __construct(){
        $this->modelo = new TareasModel();
        $this->vista = new TareasView(); // No paso parametros si el constructor de tareasview no lleva parametros
        $this->titulo = "Lista de Tareas";
    }

    function home(){
        $tareas = $this->modelo->getTareas();
        $this->vista->mostrar($this->titulo,$tareas);
    }
    function insertTarea(){
        $tit = $_POST["tituloForm"];
        $des = $_POST["descripcionForm"];
        if(isset($_POST["checkForm"])){
            $end = $_POST["checkForm"];
        }
        $end = 0;
        $this->modelo->insertTarea($tit,$des,$end);
        header("Location: https://".$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
    }
    
    function eraseTarea($id){
        $this->modelo->eraseTarea($id);
        header("Location: https://".$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
    }
}