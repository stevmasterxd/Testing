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

    public function creationBook(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El codigo Da vince', 'Dan Brown', $id, 'AVAILABLE');
        $this->assertEquals('El codigo Da vince', $book->getTitle());
        $this->assertEquals('Dan Brown', $book->getAuthor());
        $this->assertEquals($id, $book->getId());
        $this->assertEquals(Book::AVAILABLE, $book->getState());

    }
    /**
     * @test
     */

    public function informationBook(): void
    {
        $id = Uuid::uuid4()->toString();
        $book = new Book('El codigo Da vince', 'Dan Brown', $id, 'AVAILABLE');
        $informationBook = "Title: El codigo Da vince, Author: Dan Brown, ID: $id, State: available";
        $this->assertEquals($informationBook, $book->informationOfBook());

    }
    /**
     * @test
     */
    public function bookChangedTest(): void
    {
        $book = new Book('El señor de los anillos', 'Tolkien', '', '');
        $this->assertEquals(Book::AVAILABLE, $book->getState());
        $book->bookLoan();
        $this->assertEquals(Book::BORROWED, $book->getState());

    }
}