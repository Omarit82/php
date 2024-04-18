<?php
    function home(){
        require_once('header.php');
        echo 'Estamos en home';
        require_once('footer.php');
    }
    function sumar($par1, $par2){
        require_once('header.php');
        echo $par1+$par2;
        require_once('footer.php');
    }
    function impresionPi(){
        require_once('header.php');
        echo pi();
        require_once('footer.php');
    }
    function about(){
        require_once('header.php');
        echo 'Omar Roselli';
        require_once('footer.php');
    }