<?php
require("./../vendor/autoload.php");

$id = $_GET['id'];
$user_ob = new Src\User;
$user_ob->user_delete_one($id);
header('Location: user.php');
