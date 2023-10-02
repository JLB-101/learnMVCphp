<?php 

//includes -- Imports
require_once '../app/Controller.php';

 class TestController extends Controller
{
   public function show() {
      $this->view('test', ['name' => 'anir']);
   }

   // private function view ($filename = '', $date= []){
   //    require_once '../view/'.$filename . '.php';
   // }
}



?>