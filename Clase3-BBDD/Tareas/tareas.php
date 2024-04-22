<?php
    function connect(){
        return  new PDO('mysql:host=localhost;'.'dbname=todolist;charset=utf8', 'root', '');
    }
    function getTareas(){
        $db = connect();
        $sentencia = $db->prepare( "select * from task");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insertTarea(){
        $tit = $_POST["tituloForm"];
        $des = $_POST["descripcionForm"];
        if(isset($_POST["checkForm"])){
            $end = $_POST["checkForm"];
        }
        $end = 0;
       
        $db = connect();
        $sentencia = $db->prepare("INSERT INTO task(title, description,ended) VALUES(?,?,?)");
        $sentencia->execute(array($tit,$des,$end));
        header("Location: https://".$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
    }

    function eraseTarea($id){
        $db = connect();
        $sentencia = $db->prepare( "DELETE FROM `task` WHERE `task`.`id` = ?");
        $sentencia->execute(array($id));
        header("Location: https://".$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']));
    }