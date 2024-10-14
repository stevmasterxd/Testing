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
        $book = new Book('El codigo Da vince', 'Dan Brown');
        $book->informationOfBook();
        $book->getState();
        $book->getUuid();

    }
    /**
     * @test
     */
    public function bookLoanTest(): void
    {   $book= new Book ('El señor de los anillos', 'Tolkien');
        $book->bookLoan();
        $this->assertEquals(Book::AVAILABLE,$book->getState());

    }
    /**
     * @test
     */
    public function returnBooktest(): void
    {

    }

}