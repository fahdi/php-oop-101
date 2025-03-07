<?php
class User {
   public $name;
   public $email;

   public function get_name(){
    return $this->name;
   }
    
}

$user = new User();
$user->name = "John Doe";
$user->email = "john@example.com";

echo $user->get_name(); // Outputs: John Doe
