<?php 

 class TestController
{
   public function show() {
      $this->view('test', ['name' => 'anir']);
   }

   private function view ($filename = '', $date= []){
      require_once '../view/'.$filename . '.php';
   }
}



?>