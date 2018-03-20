<?php
class AreaDB {
    public static function getAreas() {
        $db = Database::getDB();
        $query = 'SELECT * FROM area ORDER BY areaID';
        $statement = $db->prepare($query);
        $statement->execute();
        $areas = array();
        foreach ($statement as $row) {
            $area = new Area($row['areaID'], $row['areaName']);
            $areas[] = $area;
        }
        $statement->closeCursor();
        return $areas;
    }

    public static function getArea($area_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM area WHERE areaID = :area_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':area_id', $area_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();
        $area = new Area($row['areaID'], $row['areaName']);
        return $area;
    }
}
?>