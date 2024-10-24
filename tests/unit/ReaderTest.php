<?php
declare(strict_types=1);
namespace Stev\Testing;
use PHPUnit\Framework\TestCase;
use Stev\Testing\Reader;
use Ramsey\Uuid\Uuid;

final class ReaderTest extends TestCase
{/**
 * @test
 */
    public function reederBookLoanTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $reader = new Reader('Steven', $id, []);
        $id2 = Uuid::uuid4()->toString();
        $book = new Book('El codigo Da vince', 'Dan Brown', $id2, Book::AVAILABLE);
        $reader->bookLoan($book);
        $this->assertSame([$book], $reader->showBooks());
    }
    /**
     * @test
     */
    public function readerReturnBookTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $reader = new Reader('Jose', $id, []);
        $id2 = Uuid::uuid4()->toString();
        $book = new Book('Don Quijote de la Mancha', 'Miguel De Cervantes', $id2, Book::AVAILABLE);
        $reader->bookLoan($book);
        $this->assertSame([$book], $reader->showBooks());
        $reader->returnBook($book);


    }
    /**
     * @test
     */
    public function readerShowBooksTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $reader = new Reader('Steven', $id, []);
        $id2 = Uuid::uuid4()->toString();
        $book = new Book('Harry Potter', 'Rowlings', $id2, Book::AVAILABLE);
        $reader->bookLoan($book);
        $this->assertEquals([$book], $reader->showBooks());
    }
}