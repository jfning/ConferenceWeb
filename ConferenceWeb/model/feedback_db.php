<?php
class FeedbackDB {
    public static function insertFeedback($firstName, $lastName, $email, $comments) {
        $db = Database::getDB();
        $query = 'INSERT INTO feedback (firstName, lastName, email, comments)
                  VALUES (:firstName, :lastName, :email, :comments)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':comments', $comments);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>