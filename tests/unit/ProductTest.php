<?php

declare(strict_types=1);

namespace Stev\Testing;

use PHPUnit\Framework\TestCase;

final class ProductTest extends TestCase
{
    /**
     * @test
     */
    public function showDetailsTest(): void
    {
        $product = new Product('coca cola', 70, 10);
        $detailsProduct = "Name: coca cola, Price: 70, Stock: 10";
        $this->assertEquals($detailsProduct, $product->showDetails());
    }
    /**
     * @test
     */
    public function updateStock(): void 
    {
        $product = new Product("Pepsi", 50,10);
        $product->updateStock(5);
        $this->assertEquals(5, $product->getStock());

        $product = new Product("Pepsi", 50,10);
        $product->updateStock(20);
        $this->assertEquals(0 ,$product->getStock());
    }
}
