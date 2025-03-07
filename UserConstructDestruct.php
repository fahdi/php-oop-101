<?php

class User {
   public $name;
   public $email;

   public function __construct($name, $email){    
    $this->name = $name;
    $this->email = $email;
    echo "\nUser created: " . $this->name . " " . $this->email . "\n";    
   }

   public function __destruct(){
    echo "\nUser destroyed: " . $this->name . " " . $this->email . "\n";    
   }
   
}

$user = new User("John Doe", "john@example.com");
$user->name = "John Doe";
$user->email = "john@example.com";

echo $user->name; // Outputs: John Doe
echo $user->email; // Outputs: john@example.com
