<?php

//includes -- Imports
require_once '../app/Controller.php';
require_once '../model/Student.php';

class TestController extends Controller
{

   private $pdo;
   public function show()
   {
      $student = new Student($this->pdo);
      $student->getAll();
      var_dump($student);
      // $this->view('test', ['name' => 'anir']);
   }


}



?>