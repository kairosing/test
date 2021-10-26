<?php
include "function.php";
$db = include "database/start.php";

$id = $_GET['id'];
$users = $db->getOne('orders', $id);
//dd($users);
foreach ($users as $user) {
//    print_r($user);
}
?>

<h1><?php echo $user['event_id'];?></h1>
