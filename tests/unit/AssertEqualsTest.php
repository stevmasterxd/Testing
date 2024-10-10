<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AssertEqualsTest extends TestCase
{/**
 * @test
 */
    public function EqualsTest(): void
    {
        $expected = new DOMDocument;
        $expected->loadXML("<foo><bar/></foo>");

        $actual = new DOMDocument;
        $actual->loadXML("<foo><bar/></foo>");
        $this->assertEquals($expected, $actual, "Los valores no son iguales");
    }

}