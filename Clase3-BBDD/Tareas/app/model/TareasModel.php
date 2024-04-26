<?php

class TareasModel{
    private $db;
    function __construct(){
        $this->db = $this->connect();
    }
    private function connect(){
        return  new PDO('mysql:host=localhost;'.'dbname=todolist;charset=utf8', 'root', '');
    }
    function getTareas(){
        $sentencia = $this->db->prepare( "select * from task");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function insertTarea($tit,$des,$end){
        $sentencia = $this->db->prepare("INSERT INTO task(title, description,ended) VALUES(?,?,?)");
        $sentencia->execute(array($tit,$des,$end));
    }

    function eraseTarea($id){
        $sentencia = $this->db->prepare("DELETE FROM `task` WHERE `task`.`id` = ?");
        $sentencia->execute(array($id));
      
    }

    function completada($id){
        $sentencia = $this->db->prepare ("UPDATE `task` SET `ended`=? WHERE `id`=$id");
        $sentencia->execute(array(1));
    }
}