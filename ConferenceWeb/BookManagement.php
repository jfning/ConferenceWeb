<?php
include 'view/header.php';
require('model/database.php');
require('model/book.php');
require('model/book_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_books';
    }
}

if ($action == 'list_books') {
    $books = BookDB::getBooks();
    include('view/book_list.php');
} else if ($action == 'delete_book') {
    $book_id = filter_input(INPUT_POST, 'book_id', FILTER_VALIDATE_INT);
    BookDB::deleteBook($book_id);
    $books = BookDB::getBooks();
    include 'view/book_list.php';
} else if ($action == 'show_add_book') {
    include('view/book_add_form.php');    
} else if ($action == 'add_book') {
    $title = filter_input(INPUT_POST, 'title');
    $author = filter_input(INPUT_POST, 'author');
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    if ($title == NULL || $author == NULL || $price == NULL || $price == FALSE) {
        //$error = "Invalid book data. Check all fields and try again.";
        include('view/book_add_form.php');
    } else { 
        BookDB::insertBook($title, $author, $price);
        $books = BookDB::getBooks();
        include 'view/book_list.php';
    }
}
include 'view/footer.php';
?>