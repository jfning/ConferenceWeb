<?php
class Cart {
    // Add an item to the cart
    public static function add_item($key, $quantity) {
        global $books;
        if ($quantity < 1) return;

        // If item already exists in cart, update quantity
        if (isset($_SESSION['bookCart'][$key])) {
            $quantity += $_SESSION['bookCart'][$key]['qty'];
            update_item($key, $quantity);
            return;
        }

        // Add item
        $book = BookDB::getBook($key);
        $cost = $book->getPrice();
        $total = $cost * $quantity;
        $item = array(
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'cost' => $cost,
            'qty'  => $quantity,
            'total' => $total
        );
        $_SESSION['bookCart'][$key] = $item;
    }

    // Update an item in the cart
    public static function update_item($key, $quantity) {
        $quantity = (int) $quantity;
        if (isset($_SESSION['bookCart'][$key])) {
            if ($quantity <= 0) {
                unset($_SESSION['bookCart'][$key]);
            } else {
                $_SESSION['bookCart'][$key]['qty'] = $quantity;
                $total = $_SESSION['bookCart'][$key]['cost'] *
                         $_SESSION['bookCart'][$key]['qty'];
                $_SESSION['bookCart'][$key]['total'] = $total;
            }
        }
    }

    // Get cart subtotal
    public static function get_subtotal() {
        $subtotal = 0;
        foreach ($_SESSION['bookCart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }
}
?>