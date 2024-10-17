<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Stev\Testing\Book;
use Ramsey\Uuid\Uuid;

final class BookTest extends TestCase
{
    /**
     * @test
     */

    public function creationBookTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El codigo Da vince', 'Dan Brown', $id, Book::AVAILABLE);
        $this->assertEquals('El codigo Da vince', $book->getTitle());
        $this->assertEquals('Dan Brown', $book->getAuthor());
        $this->assertEquals($id, $book->getId());
        $this->assertEquals(Book::AVAILABLE, $book->getState());

    }

    /**
     * @test
     */

    public function creationBookTest2(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El codigo Da vince', 'Dan Brown', $id, Book::BORROWED);
        $this->assertEquals('El codigo Da vince', $book->getTitle());
        $this->assertEquals('Dan Brown', $book->getAuthor());
        $this->assertEquals($id, $book->getId());
        $this->assertEquals(Book::BORROWED, $book->getState());

    }
    /**
     * @test
     */

    public function informationBookTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El codigo Da vince', 'Dan Brown', $id, Book::AVAILABLE);
        $informationBook = "Title: El codigo Da vince, Author: Dan Brown, ID: $id, State: available";
        $this->assertEquals($informationBook, $book->informationOfBook());

    }
    /**
     * @test
     */
    public function bookChangedTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El señor de los anillos', 'Tolkien', $id, Book::AVAILABLE);
        $this->assertEquals(Book::AVAILABLE, $book->getState());
        $book->bookLoan();
        $this->assertEquals(Book::BORROWED, $book->getState());

    }
    /**
     * @test
     */
    public function bookChangedTest2(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El señor de los anillos', 'Tolkien', $id, Book::BORROWED);
        $this->assertEquals(Book::BORROWED, $book->getState());
        $book->returnBook();
        $this->assertEquals(Book::AVAILABLE, $book->getState());

    }
    public function bookChangedTest3(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El señor de los anillos', 'Tolkien', $id, Book::AVAILABLE);
        $book->bookLoan();
        $this->assertEquals(Book::BORROWED, $book->getState());
        $book->returnBook();
        $this->assertEquals(Book::AVAILABLE, $book->getState());

    }

}