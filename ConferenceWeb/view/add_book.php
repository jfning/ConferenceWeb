<section>
    <h1>Book Store</h1>
</section>
<section>
    <form action="#" method="post">
    <input type="hidden" name="action" value="add">
    <fieldset>
        <legend>Add Item</legend>
        <p>
            <label>Book Info:</label>
            <select name="book_id">
            <?php foreach($books as $book) : ?>
                <option value="<?php echo $book->getBookID(); ?>">
                    <?php echo $book->getTitle() . " --> ($" . number_format($book->getPrice(), 2) . ")"; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label>Quantity:</label>
            <select name="book_qty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select>
        </p>
        <p>            
            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </p>
    </fieldset>
    </form>
    <p><a href="?action=show_cart">View Cart</a></p>    
</section>