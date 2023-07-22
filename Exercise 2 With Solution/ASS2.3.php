<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "<br>Deposited $amount. <br>New balance: {$this->balance}\n";
        } else {
            echo "Invalid deposit amount.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew $amount. <br>New balance: {$this->balance}\n";
        } else {
            echo "Insufficient balance or invalid withdrawal amount.\n";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount("12345", 1000.00);

//$account->deposit(500.50);
$account->withdraw(200.75);

$balance = $account->getBalance();
echo "<br>Current Balance: $balance\n";
?>
