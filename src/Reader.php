<?php
declare(strict_types=1);

namespace Stev\Testing;
use Ramsey\Uuid\Uuid;
class Reader
{
    private $name;
    private $id;
    private $bookList;
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->id = Uuid::uuid4()->toString();
        $this->bookList = [];
    }

    public function bookLoan($book): array
    {
        return $this->bookList[] = $book;
    }
    public function returnBook(): void
    {

    }
    public function showBooks(): void
    {

    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getUuid(): string
    {
        return $this->id;
    }

}