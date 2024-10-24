<?php
declare(strict_types=1);

namespace Stev\Testing;
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

    public function bookLoan(Book $book): void
    {
        if ($book->getState() === Book::BORROWED) {
            return;
        }
        $this->listOfBorrowedBooks[] = $book;
    }

    public function returnBook(Book $book): void
    {
        foreach ($this->listOfBorrowedBooks as $key => $borrowedBook) {
            if ($borrowedBook->getId() === $book->getId()) {
                unset($this->listOfBorrowedBooks[$key]);
                break;
            }
        }
    }
    public function showBooks(): array
    {
        return $this->listOfBorrowedBooks;
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