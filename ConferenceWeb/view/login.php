<?php
require_once('util/secure_conn.php');
?>
<section>
    <h1>Reviewer Login</h1>
</section>
<section>
    <form action="#" method="post">
        <fieldset>
            <legend>Login Information</legend>
            <p>
                <label>Email:</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Password:</label>
                <input type="password" name="password">
            </p>
            <p>
                <label>&nbsp;</label>
                <input type="submit" name="action" value="Login">
            </p>
        </fieldset>
    </form>
</section>