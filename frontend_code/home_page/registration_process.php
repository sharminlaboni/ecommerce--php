<?php
include("../../vendor/autoload.php");
$obj = new Src\User();

$obj->user_store_one($_POST);
header("Location: registration_success.php");

