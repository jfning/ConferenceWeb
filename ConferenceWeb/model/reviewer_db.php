<?php
class ReviewerDB {
    public static function insertReviewer($email, $password, $areaID, $subareaID) {
        $db = Database::getDB();
        $password = sha1($email . $password);
        $query = 'INSERT INTO reviewer (emailAddress, password, areaID, subareaID)
                  VALUES (:email, :password, :areaID, :subareaID)';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':areaID', $areaID);
        $statement->bindValue(':subareaID', $subareaID);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function is_valid_reviewer_login($email, $password) {
        $db = Database::getDB();
        $password = sha1($email . $password);
        $query = 'SELECT reviewerID FROM reviewer
                  WHERE emailAddress = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        return $row['reviewerID'];
    }
    
    public static function deleteReviewer($reviewer_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM reviewer WHERE reviewerID = :reviewer_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':reviewer_id', $reviewer_id);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>