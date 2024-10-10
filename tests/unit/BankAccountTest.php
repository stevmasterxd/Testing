<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Stev\Testing\BankAccount;

final class BankAccountTest extends TestCase
{
    /**
     * @test
     */
    public function bankingOperationTest(): void
    {
        $BankAccount = new BankAccount(40, 2);
        $BankAccount->withdraw(50);
        $this->assertSame(expected: 40.0, actual: $BankAccount->getBalance());
    }
    /**
     * @test
     */
    public function bankingOperationRetiroTest(): void
    {
        $BankAccount = new BankAccount(40, 2);
        $BankAccount->withdraw(30);
        $this->assertSame(expected: 10.0, actual: $BankAccount->getBalance());
    }

    /**
     * @test
     */
    public function bankingOperationDepositTest(): void
    {
        $BankAccount = new BankAccount(50 , 2);
        $BankAccount->deposit(30);
        $this->assertSame(80.0, actual:$BankAccount->getBalance());
        
    }
}