<?php
include 'view/header.php';
require('model/database.php');
require('model/book.php');
require('model/book_db.php');
require_once('util/cart.php');

session_start();
if (empty($_SESSION['bookCart'])) { $_SESSION['bookCart'] = array(); }
$books = BookDB::getBooks();

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'add_book';
    }
}

// Add or update cart as needed
switch($action) {
    case 'add':
        $key = filter_input(INPUT_POST, 'book_id');
        $quantity  = filter_input(INPUT_POST, 'book_qty');
        Cart::add_item($key, $quantity);
        include('view/cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', 
                FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['bookCart'][$key]['qty'] != $qty) {
                Cart::update_item($key, $qty);
            }
        }
        include('view/cart_view.php');
        break;
    case 'show_cart':
        include('view/cart_view.php');
        break;
    case 'add_book':
        include('view/add_book.php');
        break;
    case 'empty_cart':
        unset($_SESSION['bookCart']);
        include('view/cart_view.php');
        break;
}
include 'view/footer.php';
?>