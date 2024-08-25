<?php
class Book {

// TODO: Add properties as Private
private $title;
private $availableCopies;

public function __construct($title, $availableCopies) {

// TODO: Initialize properties

        $this->title = $title;
        $this->availableCopies = $availableCopies;
}



// TODO: Add getTitle method
public function getTitle() {
    return $this->title;
}

// TODO: Add getAvailableCopies method
public function getAvailableCopies () {
    return $this->availableCopies;
}

// TODO: Add borrowBook method
public function borrowBook() {
    if ($this->availableCopies>0) {
        $this->availableCopies--;
        return true;
    } else {
        return false;
    }
}
public function returnBook() {
    $this->availableCopies++;
}
}
class Member {

// TODO: Add properties as Private

private $name;

public function __construct($name) {

// TODO: Initialize properties
        $this->name = $name;
}

// TODO: Add getName method
public function getName() {
    return $this->name;
}


// TODO: Add borrow Book method
public function borrowBook(Book $book) {
    if($book->borrowBook()) {
        echo "{$this->name} borrowed {$book->getTitle()}\n";
    } else {
        echo "{$book->getTitle()} is not available\n";
}
}

// TODO: Add returnBook method
public function returnBook(Book $book) {
    $book->returnBook();
    echo "{$this->name} returned {$book->getTitle()}\n";
}
}
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1); // John Doe borrows The Great Gatsby
$member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird
//$member1->returnBook($book1);

// TODO: Print Available Copies with their names:
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";