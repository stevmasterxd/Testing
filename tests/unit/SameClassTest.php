<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SameClassTest extends TestCase
{
    /**
     * @test
     */
    public function exampleSame(): void
    {
        $expected = "Hola";
        $actual = "Hola";
        $this->assertSame($expected, $actual);

    }
    /**
     * @test
     */
    public function exampleNotSame(): void
    {
        $expected ="Hola";
        $actual = "Hello";
        $this->assertNotSame($expected, $actual);
    }

}