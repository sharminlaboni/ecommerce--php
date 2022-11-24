<?php 
    require_once("../../vendor/autoload.php");  
    $obj = new Src\Product();
    $id =$_GET["id"];
    $obj->delete_user($id);
    header('Location: ./product_list.php');
?>