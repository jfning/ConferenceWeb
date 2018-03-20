<?php
include 'view/header.php';
require_once('model/fields.php');
require_once('model/validate.php');
require('model/database.php');
require('model/area.php');
require('model/area_db.php');
require('model/subarea.php');
require('model/subarea_db.php');
require('model/paper_db.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('author_name');
$fields->addField('title');
$fields->addField('file_Name');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = '';
} else {
    $action = strtolower($action);
}

$area_id = filter_input(INPUT_POST, 'area_id', FILTER_VALIDATE_INT);
$subarea_id = filter_input(INPUT_POST, 'subarea_id', FILTER_VALIDATE_INT);

$areas = AreaDB::getAreas();
if ($area_id == NULL || $area_id == FALSE) {
    $area_id = $areas[0]->getAreaID();
}
$subareas = SubareaDB::getSubareasByAreaID($area_id);
$subareasAll = SubareaDB::getSubareas();

switch ($action) {
    case '':
        $authorName = '';
        $title = '';
        include 'view/paper_submit.php';
        break;
    case 'upload':
        $authorName = trim(filter_input(INPUT_POST, 'author_name'));
        $title = trim(filter_input(INPUT_POST, 'title'));
        
        if (isset($_FILES['fileName']))
            $fileName = $_FILES['fileName']['name'];
        
        $validate->text('author_name', $authorName);
        $validate->text('title', $title);
        $validate->text('file_Name', $fileName);
        
        if ($fields->hasErrors()) {
            include 'view/paper_submit.php';
        } else {
            $confirmation = '';
            while (strlen($confirmation) <= 16) {
                $confirmation .= chr(mt_rand(48, 57));
            }
            $confirmation = str_shuffle($confirmation);
            PaperDB::insertPaper($authorName, $title, $area_id, $subarea_id, $fileName, $confirmation);
            $source = $_FILES['fileName']['tmp_name'];
            $target = getcwd() . DIRECTORY_SEPARATOR . 'papers' . DIRECTORY_SEPARATOR . $fileName;
            move_uploaded_file($source, $target);
            
            include 'view/success_paper.php';
        }
        break;
}
include 'view/footer.php';
?>