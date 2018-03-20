<section>
    <h1>Online Registration</h1>
</section>
<section>
    <form action="#" method="post" >
    <fieldset>
        <legend>Contact Information</legend>
        <p>
            <label>First Name:</label>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($firstName);?>">
            <?php echo $fields->getField('first_name')->getHTML(); ?>
        </p>
        <p>
            <label>Last Name:</label>
            <input type="text" name="last_name" value="<?php echo htmlspecialchars($lastName);?>">
            <?php echo $fields->getField('last_name')->getHTML(); ?>
        </p>
        <p>
            <label>Title:</label>
            <input type = "text" name = "title" value="<?php echo htmlspecialchars($title);?>">
            <?php echo $fields->getField('title')->getHTML(); ?>
        </p>
        <p>
            <label>Organization:</label>
            <input type = "text" name = "organization" value="<?php echo htmlspecialchars($organization);?>">
            <?php echo $fields->getField('organization')->getHTML(); ?>
        </p>
        <p>
            <label>Attendee Type:</label>
            <label>Presenter<input style="width: 1em;" name = "attendee" type = "radio" value = "Presenter"
                                   <?php if ($attendee=='Presenter') { echo 'checked="checked"'; } ?>></label>
            <label>Student<input style="width: 1em;" name = "attendee" type = "radio" value = "Student"
                                 <?php if ($attendee=='Student') { echo 'checked="checked"'; } ?>></label>
            <label>Regular Attendee<input style="width: 1em;" name = "attendee" type = "radio" value = "Regular"
                                          <?php if ($attendee=='Regular') { echo 'checked="checked"'; } ?>></label>
            <?php echo $fields->getField('attendee')->getHTML(); ?>
            <br>
        </p>
        <p>
            <label>Address:</label>
            <input type="text" name="address" value="<?php echo htmlspecialchars($address);?>">
            <?php echo $fields->getField('address')->getHTML(); ?>
        </p>
        <p>
            <label>City:</label>
            <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>">
            <?php echo $fields->getField('city')->getHTML(); ?>
        </p>
        <p>
            <label>State:</label>
            <input type="text" name="state" maxlength="2" value="<?php echo htmlspecialchars($state); ?>">
            <?php echo $fields->getField('state')->getHTML(); ?>
        </p>
        <p>
            <label>ZIP Code:</label>
            <input type="text" name="zip" value="<?php echo htmlspecialchars($zip); ?>">
            <?php echo $fields->getField('zip')->getHTML(); ?>
        </p>
        <p>
            <label>Phone Number:</label>
            <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            <?php echo $fields->getField('phone')->getHTML(); ?>
        </p>
    </fieldset>
    <fieldset>
        <legend>Payment Information</legend>
        <p>
            <label>Card Type:</label>
            <select name="card_type">
                <option value="">Select One:</option>
                <option value="m" <?php if ($cardType=='m') { echo 'selected'; } ?> >MasterCard</option>
                <option value="v" <?php if ($cardType=='v') { echo 'selected'; } ?> >Visa</option>
                <option value="a" <?php if ($cardType=='a') { echo 'selected'; } ?> >American Express</option>
                <option value="d" <?php if ($cardType=='d') { echo 'selected'; } ?> >Discover</option>
            </select>
            <?php echo $fields->getField('card_type')->getHTML(); ?>
        </p>
        <p>
            <label>Card Number:</label>
            <input type="text" name="card_number" value="<?php echo htmlspecialchars($cardNumber); ?>">
            <?php echo $fields->getField('card_number')->getHTML(); ?>
        </p>
        <p>
            <label>Expiration Date:</label>
            <input type="text" name="exp_date" value="<?php echo htmlspecialchars($expDate); ?>">
            <?php echo $fields->getField('exp_date')->getHTML(); ?>
        </p>
    </fieldset>
    <fieldset>
        <legend>Submit Registration</legend>
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Register">
        <input type="submit" name="action" value="Reset" ><br>
    </fieldset>
    </form>
</section>