<?php
include "function.php";
$db = include "database/start.php";

$id = $_GET['id'];
$users = $db->getOne('nevatrip', $id);
?>

<h1><?php echo $users['event_id'];?></h1>
