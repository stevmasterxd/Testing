<?php
declare(strict_types=1);

namespace Stev\Testing;
use Ramsey\Uuid\Uuid;
class Reader
{
    private $nameReader;
    private $idReader;
    private $ListOfBorrowedBooks;
    public function __construct(string $nameReader, string $idReader, array $ListOfBorrowedBooks = [])
    {
        $this->nameReader = $nameReader;
        $this->idReader = $idReader;
        $this->ListOfBorrowedBooks = $ListOfBorrowedBooks;
    }

    public function bookLoan($book): array
    {   $this->ListOfBorrowedBooks [] = $book;
        return $this->ListOfBorrowedBooks;
    }
    public function returnBook(string $book, array $ListOfBorrowedBooks)
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
        return $this->idReader;
    }

}