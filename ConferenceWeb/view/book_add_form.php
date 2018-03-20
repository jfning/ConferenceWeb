<section>
    <h1>Add Book</h1>
</section>
<section>
    <form action="#" method="post">
    <input type="hidden" name="action" value="add_book">
    <fieldset>
        <legend>New Book</legend>
        <p>
            <label>Title:</label>
            <input type="text" name="title" />
        </p>
        <p>
            <label>Author:</label>
            <input type="text" name="author" />
        </p>
        <p>
            <label>Price:</label>
            <input type="text" name="price" />
        </p>
        <p>            
            <label>&nbsp;</label>
            <input type="submit" value="Add Book">
        </p>
    </fieldset>
    </form>
    <p>
        <a href="?action=list_books">View Book List</a>
    </p>
</section>