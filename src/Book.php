<?php
declare(strict_types=1);
namespace Stev\Testing;
//require 'vendor/autoload.php';
class Book
{
    private $title;
    private $author;
    private $id;
    private $state;
    const AVAILABLE = 'available';
    const BORROWED = 'borrowed';
    public function __construct(string $title, string $author, string $id, string $state)
    {
        $this->title = $title;
        $this->author = $author;
        $this->id = $id;
        $this->state = $state;
    }
    public function informationOfBook(): string
    {
        return "Title: $this->title, Author: $this->author, ID: $this->id, State: $this->state";
    }
    public function bookLoan(): void
    {
        if ($this->state === self::AVAILABLE) {
            $this->state = self::BORROWED;
        }
    }
    public function returnBook(): void
    {
        if ($this->state === self::BORROWED) {
            $this->state = self::AVAILABLE;
        }
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getId(): string
    {
        return $this->id;
    }
    public function getState(): string
    {
        return $this->state;
    }
    
}
