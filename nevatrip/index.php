<?php

include 'function.php';

//$routes = [
//    "/" => "functions/homepage.php",
//    "/about" => "functions/about.php"
//];

//$route = $_SERVER['REQUEST_URI'];
//dd($routes);
//dd(array_key_exists($route, $routes));

$db = include 'database/start.php';

$users = $db->getOne('order_tickets', 2);
$users = $db->getAll('orders','order_tickets', 'ticket_prices');
include 'index.view.php';
