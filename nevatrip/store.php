<?php
include "function.php";
$db = include "database/start.php";

$db->create('nevatrip',[
   'event_id' => $_POST['event_id'],
   'event_date' => $_POST['event_date'],
   'ticket_adult_price' => $_POST['ticket_adult_price'],
   'ticket_adult_quantity' => $_POST['ticket_adult_quantity'],
   'ticket_kid_price' => $_POST['ticket_kid_price'],
   'ticket_kid_quantity' => $_POST['ticket_kid_quantity'],
]);
header("Location: index.php");