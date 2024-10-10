<?php
declare(strict_types=1);
namespace Stev\Testing;
class BankAccount
{
    private $balance;
    private $id;

    public function __construct(float $balance, int $id)
    {
        $this->balance = $balance;
        $this->id = $id;
    }
    public function getBalance(): float
    {
        return $this->balance;
    }
    public function withdraw(float $BankAccount): void
    {
        if ($this->balance >= $BankAccount) {
            $this->balance = $this->getBalance() - $BankAccount;
        }
    }
    public function deposit(float $BankAccount): void
    {

        if ($BankAccount > 0) {
            $this->balance = $this->getBalance() + $BankAccount;
        }
    }
    private function transfer(): void
    {

    }

}