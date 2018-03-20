<?php
class Area {
    private $areaID;
    private $areaName;

    public function __construct($areaID, $areaName) {
        $this->areaID = $areaID;
        $this->areaName = $areaName;
    }

    public function getAreaID() {
        return $this->areaID;
    }

    public function setAreaID($value) {
        $this->areaID = $value;
    }

    public function getAreaName() {
        return $this->areaName;
    }

    public function setAreaName($value) {
        $this->areaName = $value;
    }
}
?>