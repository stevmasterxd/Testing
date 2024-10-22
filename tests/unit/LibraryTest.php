<?php
declare(strict_types=1);

namespace Stev\Testing;
use Stev\Testing\Book;
use Stev\Testing\Reader;
use Ramsey\Uuid\Uuid;
use PHPUnit\Framework\TestCase;
final class LibraryTest extends TestCase
{/**
 * @test
 */
    public function addLibraryTest(): void
    {
        $id = Uuid::uuid4()->toString();
        $library = new Library($id, 'Ateneo', [], []);
        $id2 = Uuid::uuid4()->toString();
        $reader = new Reader('Steven', $id2, []);
        $id3 = Uuid::uuid4()->toString();
        $book = new Book('Juego de tronos', 'Martin', $id3, Book::AVAILABLE);
        $library->addBookToTheList($book);
        $library->addReaderToTheList($reader);
        $this->assertEquals([$reader], $library->getReaderList());
        $this->assertEquals([$book], $library->getBookList());
        $reader->bookLoan($book);
        $this->assertEquals([$reader], $library->getReaderList());
        $this->assertEquals('borrowed', $book->getState());
    }

}