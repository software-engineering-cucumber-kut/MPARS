<?php
require('database.php');
$json_string = file_get_contents('php://input');
$json_obj = json_decode($json_string);
$target_string = 'INTO item (id, name, photo, description, price, storeid) VALUES (NULL, '.
    "'" . $json_obj->name . "'" . ',' .
    "'" . $json_obj->photo . "'" . ',' .
    "'" . $json_obj->description . "'" . ',' .
    $json_obj->price . ',' .
    $json_obj->storeid . ')';
database('INSERT', $target_string);