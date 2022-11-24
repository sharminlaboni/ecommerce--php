<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allow Here';
    die();
}

    require_once("../../vendor/autoload.php");  
    $obj = new Src\Product();

   $obj->store_user($_POST);

    header('Location: ./product_list.php');

?>