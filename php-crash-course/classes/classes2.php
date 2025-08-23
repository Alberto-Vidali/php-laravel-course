<?php

class BankAccount {
    private float $balance = 0;

    public function getBalance() : float {
        return $this->balance;
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): bool {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount();

echo "{$account->getBalance()} \n";

var_dump(
    $account->deposit(1000),
    $account->withdraw(2000),
    $account->getBalance()
);