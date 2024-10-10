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
        $BankAccount->withdraw(10);
        $this->assertSame(expected:30.0, actual:$BankAccount->getBalance());
    }
}