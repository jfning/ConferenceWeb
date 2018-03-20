<section>
    <h1>Registration has been successfully submitted</h1>
    <p>Thank you <?php echo htmlspecialchars($firstName.' '.$lastName); ?> for your online registration!</p>
    <p>Your confirmation number is: <strong><?php echo $confirmation ?></strong></p>
    <ul>
        <li>First Name: <?php echo htmlspecialchars($firstName); ?></li>
        <li>Last Name: <?php echo htmlspecialchars($lastName); ?></li>
        <li>Title: <?php echo htmlspecialchars($title); ?></li>
        <li>Organization: <?php echo htmlspecialchars($organization); ?></li>
        <li>Attendee Type: <?php echo htmlspecialchars($attendee); ?></li>
        <li>Address: <?php echo htmlspecialchars($address); ?></li>
        <li>City: <?php echo htmlspecialchars($city); ?></li>
        <li>State: <?php echo htmlspecialchars($state); ?></li>
        <li>ZIP: <?php echo htmlspecialchars($zip); ?></li>
        <li>Phone: <?php echo htmlspecialchars($phone); ?></li>
    </ul>
</section>