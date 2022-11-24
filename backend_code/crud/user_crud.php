
<?php
require("./../../vendor/autoload.php");
$obj = new Src\User();

if(count($_POST) != 0) {
    $mode = $_POST["button"];

    if($mode == "Update") {
        $id = $_POST["id"];
        $obj->user_update_one($_POST, $id);
        header("Location: ../category.php");
    } else if($mode == "Add") {
        $obj->user_store_one($_POST);
        header("Location: ../category.php");
    }
} else {
    $id = $_GET["id"];
    $obj->user_delete_one($id);
    header("Location: ../category.php");
}
?>