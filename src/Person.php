<?php
declare(strict_types=1);

class Person
{
    private $firstname;
    private $lastname;
    private $age;
    private $nickname;
    private $changedNickName = 0;
    private $dateOfBirth;

    public function __construct(string $firstname, string $lastname, DateTime $dateOfBirth)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function getFullname(): string
    {
        return $this->firstname . " " . $this->lastname;
    }
    public function getAge(): int
    {
        $today = new DateTime();
        $age = $today->diff($this->dateOfBirth)->y;
        return $age;
    }
    public function setNickName($nickname): void
    {
        if ($this->changedNickName < 2) {
            throw new Exception(message: "You cant't changed a nickname more than 2 times");
        }
        if (strlen(string: $nickname) < 2) {
            throw new Exception(message: "Nickname must be at least 2 characters long");
        }
        if ($nickname === $this->firstname || $nickname === $this->lastname) {
            throw new Exception(message: "Nickname cannot be the same as your first name or last name");
        }
        $this->nickname = $nickname;
        $this->nickname++;
    }
    public function getNickName()
    {
        return $this->nickname;
    }
}
$dateOfBirth = new DateTime(datetime: '1998-03-02');
$person1 = new Person(firstname: 'Steven', lastname: 'Bravo', dateOfBirth: $dateOfBirth);
echo $person1->getFullName();
echo $person1->getAge();
$person1->setNickname(nickname: 'stev');
