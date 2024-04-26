<?php
require_once 'app/view/TareasView.php';
require_once 'app/model/TareasModel.php';

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
        header("Location:".BASE_URL);
    }
    
    function eraseTarea($params){
        $this->modelo->eraseTarea($params[0]);
        header("Location:".BASE_URL);
    }

    function completada($params){
        $this->modelo->completada($params[0]);
        header("Location:".BASE_URL);
    }
}