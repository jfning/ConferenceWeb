<?php
class Paper {
    private $authorName;
    private $title;
    private $areaName;
    private $subareaName;
    private $fileName;

    public function __construct($authorName, $title, $areaName, $subareaName, $fileName) {
        $this->authorName = $authorName;
        $this->title = $title;
        $this->areaName = $areaName;
        $this->subareaName = $subareaName;
        $this->fileName = $fileName;
    }
    
    public function getAuthorName() {
        return $this->authorName;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAreaName() {
        return $this->areaName;
    }
    
    public function getSubareaName() {
        return $this->subareaName;
    }
    
    public function getFileName() {
        return $this->fileName;
    }
}
?>