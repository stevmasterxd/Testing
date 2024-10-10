<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Test;
final class AsserTrueClassTest extends TestCase
{
    /**
     * @test
     */
    public function AsserTrueTest(): void
    {
        $expected = 2 == 2;
        $this->assertTrue($expected);
    }
     /**
     * @test
     */
    public function AsserNotTrueTest(): void
    {
        $expected = 2 == 1;
        $this->assertNotTrue($expected);
    }
}