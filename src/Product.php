<?php

declare(strict_types=1);

namespace Stev\Testing;

class Product
{
    private $name;
    private $price;
    private $stock;

    public function __construct(string $name, float $price, int $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
    public function showDetails(): string
    {
        return "Name: $this->name, Price: $this->price, Stock: $this->stock";
    }
    public function updateStock($cantidad): void
    {
        if ($cantidad < 0) {
            return;
        }
        $this->stock -= $cantidad;
        if ($this->stock < 0) {
            $this->stock = 0;
        }
    }
    public function discount($porcentaje): void
    {
        if ($porcentaje < 0 || $porcentaje > 100) {
            return;
        }
        $discont = $this->price * ($porcentaje / 100);
        $this->price -= $discont;
    }
    public function getName(): string
    {
        return $name = $this->name;
    }
    public function getPrice(): float
    {
        return $price = $this->price;
    }
    public function getStock(): int
    {
        return $stock = $this->stock;
    }
}
