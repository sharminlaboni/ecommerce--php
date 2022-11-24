<?php
require("./../../vendor/autoload.php");
$obj = new Src\Category();

if(count($_POST) != 0) {
    $mode = $_POST["button"];

    if($mode == "Save") {
        $id = $_POST["id"];
        $obj->category_update_one($_POST, $id);
        header("Location: ../category.php");
    } else if($mode == "Add") {
        $obj->category_store_one($_POST);
        header("Location: ../category.php");
    }
} else {
    $id = $_GET["id"];
    $obj->category_delete_one($id);
    header("Location: ../category.php");
}
?>