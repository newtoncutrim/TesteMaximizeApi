<?php
$db_host = 'db';
$db_name = 'maximize';
$db_user = 'root';
$db_pass = '123';

$conn = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$array = [
    'error' => '',
    'result' => []
];

// error_reporting(E_ERROR | E_PARSE);


