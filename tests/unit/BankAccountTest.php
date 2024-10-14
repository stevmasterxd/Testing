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
        $BankAccount = new BankAccount(50, 2);
        $BankAccount->deposit(30);
        $this->assertSame(80.0, actual: $BankAccount->getBalance());

    }
    /**
     * @test
     */
    public function bankingOperatioTransfertTest(): void
    {
        $BankAccount = new BankAccount(50, 2);
        $BankAccount->deposit(30);
        $this->assertSame(80.0, actual: $BankAccount->getBalance());

    }
    /**
     * @test
     */
    public function bankingTransfertTest(): void
    {
        $cuentaOrigen = new BankAccount(balance: 80, id: 2);
        $cuentaDestino = new BankAccount(balance: 200, id: 3);
        $cuentaOrigen->transfer(amount: 30, accountDestiny: $cuentaDestino);
        $this->assertSame(expected: 50.0, actual: $cuentaOrigen->getBalance());
        $this->assertSame(expected: 230.0, actual: $cuentaDestino->getBalance());
    }
    /**
     * @test
     */
    public function bankingTransfertTest2(): void
    {
        $cuentaOrigen = new BankAccount(balance: 20, id: 2);
        $cuentaDestino = new BankAccount(balance: 200, id: 3);
        $cuentaOrigen->transfer(amount: 30, accountDestiny: $cuentaDestino);
        $this->assertSame(expected: 20.0, actual: $cuentaOrigen->getBalance());
        $this->assertSame(expected: 200.0, actual: $cuentaDestino->getBalance());
    }
}
