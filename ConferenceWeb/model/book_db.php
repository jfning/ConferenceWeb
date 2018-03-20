<?php
class BookDB {
    public static function insertBook($title, $author, $price) {
        $db = Database::getDB();
        $query = 'INSERT INTO book (title, author, price)
                  VALUES (:title, :author, :price)';
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':author', $author);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function deleteBook($book_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM book WHERE bookID = :book_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function getBooks() {
        $db = Database::getDB();
        $query = 'SELECT * FROM book ORDER BY title';
        $statement = $db->prepare($query);
        $statement->execute();
        $books = array();
        foreach ($statement as $row) {
            $book = new Book($row['bookID'], $row['title'], $row['author'], $row['price']);
            $books[] = $book;
        }
        $statement->closeCursor();
        return $books;
    }

    public static function getBook($book_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM book WHERE bookID = :book_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':book_id', $book_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();
        $book = new Book($row['bookID'], $row['title'], $row['author'], $row['price']);
        return $book;
    }
}
?>