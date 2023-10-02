<?php 
# includes -- imports
require_once '../view/test.php';

 class Controller
{
    protected $pdo;

    public function __construct()
    {
       $pdo = new PDO('mysql:host=localhost;dbname=mvc', 'mode', '1234');
    }

    protected function view($filename = '', $data= []){
        require_once '../view/'.$filename . '.php';
    }
}



?>