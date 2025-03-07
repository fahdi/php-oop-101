<?php

class BankAccount {
   public $accountNumber;
   public $balance;

   private $pin;

   protected $accountType;

   public function get_accountType() {
    return $this->accountType;
   }

   public function set_accountType($accountType) {
    $this->accountType = $accountType;
   }

   public function get_balance() {
    return $this->balance;
   }

   public function set_balance($balance) {
    $this->balance = $balance;
   }

   // Getter and Setter for private property $pin
   public function get_pin() {
    return $this->pin;
   }

   public function set_pin($pin) {
    $this->pin = $pin;
   }

   public function __construct($accountNumber, $balance, $pin) {
    $this->accountNumber = $accountNumber;
    $this->balance = $balance;
    $this->pin = $pin;
   }

   public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount. New balance: $this->balance\n";
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Insufficient balance.\n";
        } else {
            $this->balance -= $amount;
            echo "Withdrawn $amount. New balance: $this->balance\n";
        }
    }


   
}

$account = new BankAccount();
$account->accountNumber = "1234567890";
$account->balance = 1000;

echo $account->accountNumber; // Outputs: 1234567890
echo $account->balance; // Outputs: 1000
