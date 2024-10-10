<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\DataProvider;
final class StackTest extends TestCase
{
    #[DataProvider(methodName: 'DataProvider')]
    #[TestDox('Suma de dos numeros enteros')]
    #[Test]
    public function Sumar(): void
    {
        $this->assertSame(1, 1);
    }
    private static function DataProvider(): array
    {
        return [
            'data set 1' => [0, 0, 0],
            'data set 2' => [1, 0, 1],
            'data set 3' => [1, 1, 0],
            'data set 4' => [3, 1, 1]

        ];
    }
}
