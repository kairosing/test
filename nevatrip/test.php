<?php

include 'function.php';
$db = include 'database/start.php';

$users = $db->getOne('nevatrip', 2);




$users = $db->getAll('nevatrip');
include 'test.view.php';
