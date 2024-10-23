<?php
declare(strict_types=1);

namespace Stev\Testing;

class Library
{
    private $id;
    private $libraryName;
    private $readerList;
    private $bookList;
    public function __construct(string $id, string $libraryName, array $readerList, array $bookList)
    {
        $this->id = $id;
        $this->libraryName = $libraryName;
        $this->readerList = $readerList;
        $this->bookList = $bookList;
    }
    public function addReaderToTheList(Reader $reader): void
    {
        $this->readerList[] = $reader;
    }
    public function addBookToTheList(Book $book): void
    {
        $this->bookList[] = $book;

    }
    public function borrowLibraryBook(Book $book, Reader $reader): void
    {
        if ($book->getState() === Book::BORROWED) {
            return;
        }
        $book->bookLoan();
        $reader->bookLoan($book);
    }
    public function returnBookToLibrary(Book $book): void
    {
        foreach ($this->bookList as $key => $borrowedBook) {
            if ($borrowedBook->getId() === $book->getId()) {
                unset($this->listOfBorrowedsBooks[$key]);
                $book->returnBook();
                break;
            }
        }
    }
    public function getId(): string
    {
        return $this->id;
    }
    public function getLibraryName(): string
    {
        return $this->libraryName;
    }
    public function getReaderList(): array
    {
        return $this->readerList;
    }
    public function getBookList(): array
    {
        return $this->bookList;
    }
}
