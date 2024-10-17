<?php
declare(strict_types=1);

namespace Stev\Testing;
use Ramsey\Uuid\Uuid;
class Reader
{
    private $nameReader;
    private $idReader;
    private $listOfBorrowedBooks;
    public function __construct(string $nameReader, string $idReader, array $listOfBorrowedBooks)
    {
        $this->nameReader = $nameReader;
        $this->idReader = $idReader;
        $this->listOfBorrowedBooks = $listOfBorrowedBooks;
    }

    public function bookLoan($book): void
    {
        if ($book->getState() === Book::BORROWED) {
            return;
        }
        $this->listOfBorrowedBooks[] = $book;
        $book->bookLoan();
    }

    public function returnBook(string $book, array $listOfBorrowedBooks)
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
    public function getListOfBorrowedBooks(): array
    {
        return $this->listOfBorrowedBooks;
    }
    

}