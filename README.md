# Object-Oriented Programming in PHP - Bite-sized Learning

20-minute daily sessions, focusing on practical OOP concepts in PHP that you can build upon incrementally.

## Day 1: OOP Fundamentals & Classes

A class is like a blueprint for creating objects:

```php
<?php
// Basic class definition
class User {
    // Properties (attributes)
    public $username;
    public $email;
    
    // Method (function inside a class)
    public function getUsername() {
        return $this->username;
    }
}

// Creating an object (instance) from the class
$user = new User();
$user->username = "john_doe";
$user->email = "john@example.com";

// Accessing methods
echo $user->getUsername(); // Outputs: john_doe
?>
```

Try at Code: [User.php](User.php)


Key points to understand:
- `class User { }` defines a blueprint
- `$this` refers to the current object instance
- Properties store data
- Methods define behavior
- Objects are created using the `new` keyword

Try creating your own simple class today with a couple of properties and methods.

## Day 2: Constructors & Destructors

```php
<?php
class User {
    public $username;
    public $email;
    
    // Constructor - runs when an object is created
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
        echo "User object created!<br>";
    }
    
    // Destructor - runs when an object is destroyed
    public function __destruct() {
        echo "User object destroyed!<br>";
    }
}

// Creating an object with constructor parameters
$user = new User("jane_doe", "jane@example.com");
echo $user->username; // Outputs: jane_doe

// The destructor will be called automatically when the script ends
?>
```

Practice exercise: Modify yesterday's class to include a constructor that initializes properties.

Try at Code: [UserConstructDestruct.php](UserConstructDestruct.php)


