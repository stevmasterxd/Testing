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
        $book->bookLoan();
    }

    public function returnBook(Book $book): void
    {
        foreach ($this->listOfBorrowedBooks as $key => $borrowedBook) {
            if ($borrowedBook->getId() === $book->getId()) {
                unset($this->listOfBorrowedsBooks[$key]);
                $book->returnBook();
                break;
            }
        }
    }
    public function showBooks(): void
    {
        if (empty($this->listOfBorrowedBooks)) {
            return;
        }
        foreach ($this->listOfBorrowedBooks as $book) {
            $book->getTitle() . "\n";
        }
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