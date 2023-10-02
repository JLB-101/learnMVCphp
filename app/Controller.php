<?php 

 class Controller
{
    private function view($filename = '', $date= []){
        require_once '../view/'.$filename . '.php';
    }
}



?>