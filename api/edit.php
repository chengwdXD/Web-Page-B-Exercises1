<?php
include_once "../base.php";
$table = $_POST['table'];
dd($_POST);

foreach ($_POST['id'] as $idx => $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $$table->del($id);
    } else {
        $row = $$table->find($id);
        switch ($table) {
            case "Title":
                $row['text'] = $_POST['text'][$idx];
                $row['sh'] = (isset($_POST['sh']) && $_POST['sh'] == $id) ? 1 : 0;
                break;
            case "Admin":
                $row['acc'] = $_POST['acc'];
                $row['pw'] = $_POST['pw'];
                break;
            case "Menu":
                $row['name'] = $_POST['name'];
                $row['href'] = $_POST['href'];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
            default:
                if (isset($_POST['text'])) {
                    $row['text'] = $_POST[$idx];
                }
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
        }
        $$table->save($row);
    }
}
to('../back.php?=' . lcfirst($table));
