<?php 

 class Controller
{
    protected function view($filename = '', $date= []){
        require_once '../view/'.$filename . '.php';
    }
}



?>