<section>
    <h1>Book Store</h1>
</section>
<section>
    <fieldset>
        <legend>Your Cart</legend>
        <?php if (empty($_SESSION['bookCart']) || count($_SESSION['bookCart']) == 0) : ?>
            <p>
                There are no items in your cart.
            </p>
        <?php else: ?>
        <form action="#" method="post">
            <input type="hidden" name="action" value="update">
            <table>
                <tr id="cart_header">
                    <th style="width: 500px;">Book Title</th>
                    <th style="width: 400px;">Author Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Item Total</th>
                </tr>
                <?php foreach( $_SESSION['bookCart'] as $key => $item ) :
                    $cost  = number_format($item['cost'],  2);
                    $total = number_format($item['total'], 2);
                ?>
                <tr>
                    <td>
                        <?php echo $item['title']; ?>
                    </td>
                    <td>
                        <?php echo $item['author']; ?>
                    </td>
                    <td class="right">
                        $<?php echo $cost; ?>
                    </td>
                    <td class="right">
                        <input type="text" class="cart_qty"
                            name="newqty[<?php echo $key; ?>]"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr id="cart_footer">
                    <td colspan="4"><b>Subtotal</b></td>
                    <td>$<?php echo Cart::get_subtotal(); ?></td>
                </tr>
                <tr class="no_border">
                    <td colspan="5" class="right">
                        <input type="submit" value="Update Cart">
                    </td>
                </tr>
            </table>
            <p>
                Click "Update Cart" to update quantities in your cart.<br> 
                Enter a quantity of 0 to remove an item.
            </p>
        </form>
        <?php endif; ?>
        </fieldset>
    <p><a href="?action=add_book">Add Item</a></p>
    <p><a href="?action=empty_cart">Empty Cart</a></p>
</section>