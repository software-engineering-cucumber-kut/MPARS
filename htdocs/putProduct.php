{
    "success":<?php
session_start();
if (isset($_SESSION['id'])) {
    require('database.php');
    global $last_insert_id;
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    $target_string = 'INTO item (id, name, photo, description, price, storeid) VALUES (NULL, '.
        "'" . $json_obj->name . "'" . ',' .
        "'" . $json_obj->photo . "'" . ',' .
        "'" . $json_obj->description . "'" . ',' .
        $json_obj->price . ',' .
        $json_obj->storeid . ')';
    database('INSERT', $target_string);
    echo "1";
} else {
    echo "0";
}
?>

}
