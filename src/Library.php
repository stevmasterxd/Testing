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
    public function borrowLibraryBook(Book $book): void
    {
        if ($book->getState() === Book::BORROWED) {
            return;
        }
        $book->bookLoan();
        $this->bookList[] = $book;
    }
    public function returnBookToLibrary(): void
    {

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