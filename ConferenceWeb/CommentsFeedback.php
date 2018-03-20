<?php
include 'view/header.php';
require_once('model/fields.php');
require_once('model/validate.php');
require('model/database.php');
require('model/feedback_db.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('first_name');
$fields->addField('last_name');
$fields->addField('email');
$fields->addField('comments');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'clear';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'clear':
        $firstName = '';
        $lastName = '';
        $email = '';
        $comments = '';
        include 'view/feedback.php';
        break;
    case 'submit':
        $firstName = trim(filter_input(INPUT_POST, 'first_name'));
        $lastName = trim(filter_input(INPUT_POST, 'last_name'));
        $email = trim(filter_input(INPUT_POST, 'email'));
        $comments = trim(filter_input(INPUT_POST, 'comments'));

        // Validate form data
        $validate->text('first_name', $firstName);
        $validate->text('last_name', $lastName);
        $validate->text('email', $email);
        $validate->text('comments', $comments);

        if ($fields->hasErrors()) {
            include 'view/feedback.php';
        } else {
            FeedbackDB::insertFeedback($firstName, $lastName, $email, $comments);
            include 'view/success_feedback.php';
        }
        break;
}
include 'view/footer.php';
?>