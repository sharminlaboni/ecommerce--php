<?php

require("../vendor/autoload.php");
$obj = new Src\User();

$obj->user_update_one($_POST, $_POST["id"]);
header("Location: user.php");