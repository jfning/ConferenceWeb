<?php
class Book {
    private $bookID;
    private $title;
    private $author;
    private $price;
    
    public function __construct($bookID, $title, $author, $price) {
        $this->bookID = $bookID;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getBookID() {
        return $this->bookID;
    }
    
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
    
    public function getPrice() {
        return $this->price;
    }
}
?>