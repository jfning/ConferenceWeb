<?php
class Subarea {
    private $subareaID;
    private $areaId;
    private $subareaName;

    public function __construct($subareaID, $areaId, $subareaName) {
        $this->subareaID = $subareaID;
        $this->areaId = $areaId;
        $this->subareaName = $subareaName;
    }
    
    public function getSubareaID() {
        return $this->subareaID;
    }

    public function setSubareaID($value) {
        $this->subareaID = $value;
    }

    public function getAreaID() {
        return $this->areaId;
    }

    public function setAreaID($value) {
        $this->areaId = $value;
    }

    public function getSubareaName() {
        return $this->subareaName;
    }

    public function setSubareaName($value) {
        $this->subareaName = $value;
    }
}
?>