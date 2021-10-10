<?php
include "function.php";
$db = include "database/start.php";

$db->update('posts', $_POST);