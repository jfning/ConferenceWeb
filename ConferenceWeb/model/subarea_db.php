<?php
class SubareaDB {
    public static function getSubareasByAreaID($area_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM subarea WHERE areaID = :area_id ORDER BY subareaID';
        $statement = $db->prepare($query);
        $statement->bindValue(":area_id", $area_id);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        foreach ($rows as $row) {
            $subarea = new Subarea($row['subareaID'], $row['areaID'], $row['subareaName']);
            $subareas[] = $subarea;
        }
        return $subareas;
    }
    
    public static function getSubareas() {
        $db = Database::getDB();
        $query = 'SELECT * FROM subarea ORDER BY subareaID';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        return $rows;
    }

    public static function getSubarea($subarea_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM subarea WHERE subareaID = :subarea_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':subarea_id', $subarea_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();
        $subarea = new Subarea($row['subareaID'], $row['areaID'], $row['subareaName']);
        return $subarea;
    }
}
?>