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

}