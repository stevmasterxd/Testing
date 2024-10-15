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

    public function informationBook(): void
    {

        $book = new Book('El codigo Da vince', 'Dan Brown', '', 'AVAILABLE');
        $result = $book->informationOfBook();
        $this->assertEquals($result, $book->informationOfBook());

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