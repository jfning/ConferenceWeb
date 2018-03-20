<section>
    <h1>Book List</h1>
</section>
<section>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th class="right">Price</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($books as $book) : ?>
        <tr>
            <td><?php echo $book->getTitle(); ?></td>
            <td><?php echo $book->getAuthor(); ?></td>
            <td class="right"><?php echo $book->getPrice(); ?></td>
            <td>
                <form action="#" method="post">
                    <input type="hidden" name="action" value="delete_book">
                    <input type="hidden" name="book_id" value="<?php echo $book->getBookID(); ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <a href="?action=show_add_book">Add Book</a>
    </p>
</section>