<?php
declare(strict_types=1);

namespace Stev\Testing;
use Ramsey\Uuid\Uuid;
class Reader
{
    private $nameReader;
    private $id;
    private $bookList;
    public function __construct(string $nameReader, string $id, array $bookList)
    {
        $this->nameReader = $nameReader;
        $this->id = Uuid::uuid4()->toString();
        $this->bookList = [];
    }

    public function bookLoan($book): array
    {
        return $this->bookList[] = $book;
    }
    public function returnBook(string $book, array $bookList): void
    {
        
    }
    public function showBooks(): void
    {

    }
    public function getNameReader(): string
    {
        return $this->nameReader;
    }
    public function getUuid(): string
    {
        return $this->id;
    }

}