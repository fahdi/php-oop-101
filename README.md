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


## Day 3: Visibility Modifiers & Encapsulation

Encapsulation is a fundamental OOP principle that restricts direct access to an object's properties and methods. PHP offers three visibility modifiers:

```php
<?php
class BankAccount {
    // Private: accessible only within this class
    private $balance;
    
    // Protected: accessible within this class and child classes
    protected $accountNumber;
    
    // Public: accessible from anywhere
    public $accountHolder;
    
    public function __construct($holder, $accountNumber, $initialBalance) {
        $this->accountHolder = $holder;
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    
    // Getter method - provides controlled access to private property
    public function getBalance() {
        return $this->balance;
    }
    
    // Setter method - provides controlled way to modify private property
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }
    
    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount("John Doe", "123456789", 1000);

// This works - public property
echo $account->accountHolder; // John Doe

// This would cause an error - private property
// echo $account->balance;

// This would cause an error - protected property
// echo $account->accountNumber;

// Use public methods to interact with private properties
echo $account->getBalance(); // 1000
$account->deposit(500);
echo $account->getBalance(); // 1500
?>
```

Benefits of encapsulation:
1. **Data protection** - prevents accidental modification
2. **Validation** - ensures data integrity (e.g., can't deposit negative amounts)
3. **Flexibility** - implementation details can change without affecting external code
4. **Maintenance** - easier to debug and modify

Practice exercise: Modify your class from the previous days to use private properties with getters and setters.


Try at Code: [BankAccount.php](BankAccount.php)

