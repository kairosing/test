<?php
include "function.php";
$db = include "database/start.php";

$id = $_GET['id'];
$db->delete('nevatrip', $id);

header("Location: index.php");