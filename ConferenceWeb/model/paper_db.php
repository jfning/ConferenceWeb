<?php
class PaperDB {
    public static function insertPaper($authorName, $title, $areaID, $subareaID, $fileName, $confirmation) {
        $db = Database::getDB();
        $query = 'INSERT INTO paper (authorName, title, areaID, subareaID, fileName, confirmation)
                  VALUES (:authorName, :title, :areaID, :subareaID, :fileName, :confirmation)';
        $statement = $db->prepare($query);
        $statement->bindValue(':authorName', $authorName);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':areaID', $areaID);
        $statement->bindValue(':subareaID', $subareaID);
        $statement->bindValue(':fileName', $fileName);
        $statement->bindValue(':confirmation', $confirmation);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function getPapersByReviewerID($reviewer_id) {
        $db = Database::getDB();
        $query = 'SELECT p.authorName, p.title, a.areaName, s.subareaName, p.fileName FROM reviewer r
                  INNER JOIN paper p ON (p.areaID = r.areaID OR r.areaID = 0) AND (p.subareaID = r.subareaID OR r.subareaID = 0)
                  INNER JOIN area a ON a.areaID = p.areaID
                  INNER JOIN subarea s ON s.subareaID = p.subareaID
                  WHERE reviewerID = :reviewer_id
                  ORDER BY a.areaName, s.subareaName';
        $statement = $db->prepare($query);
        $statement->bindValue(':reviewer_id', $reviewer_id);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        $papers = [];
        foreach ($rows as $row) {
            $paper = new Paper($row['authorName'], $row['title'], $row['areaName'], $row['subareaName'], $row['fileName']);
            $papers[] = $paper;
        }
        return $papers;
    }
    
    public static function deletePaper($paper_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM paper WHERE paperID = :paper_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':paper_id', $paper_id);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>