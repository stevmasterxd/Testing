<?php
declare(strict_types=1);

namespace Stev\Testing;

class FruitClass
{
    public $name;
    public $color;
    public function __construct(string $name, string $color)
    {   $this->name=$name;
        $this->color=$color;

    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getColor(): string
    {
        return $this->color;
    }
}
$Apple = new FruitClass('Aple', 'Red');


