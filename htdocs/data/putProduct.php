{
    "success":<?php
session_start();
if (isset($_SESSION['id'])) {
    require('database.php');
    global $last_insert_id;
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    $itemId = database('SELECT', 'id from item WHERE name = \'' . $json_obj->name . '\'');
    $itemId = (int)$itemId[0]["id"];
    $target_string = 'INTO item (id, name, photo, description, price, storeid) VALUES (' .
        $itemId . ', ' .
        "'" . $json_obj->name . "'" . ',' .
        "'" . $json_obj->photo . "'" . ',' .
        "'" . $json_obj->description . "'" . ',' .
        $json_obj->price . ',' .
        $json_obj->storeid . ') ON DUPLICATE KEY UPDATE ' .
        "name = '" . $json_obj->name . "', " .
        "photo = '" . $json_obj->photo . "', " .
        "description = '" . $json_obj->description . "', " .
        "price = " . $json_obj->price . ", " .
        "storeid = " . $json_obj->storeid;
    $result = database('INSERT', $target_string);
    if ($result) {
        echo "1";
    } else {
        echo "0";
    }
} else {
    echo "0";
}
?>

}
