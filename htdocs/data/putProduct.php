{
    "success":<?php
session_start();
if (isset($_SESSION['id'])) {
    require('database.php');
    global $last_insert_id;
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    //var_dump($json_obj);
    $itemId = database('SELECT', 'id from item WHERE name = \'' . $json_obj->name . '\'');
    $itemId = (int)$itemId[0]["id"];
    $storeId = database('SELECT', 'id from store WHERE name = \'' . $json_obj->storename . '\'');
    $storeId = (int)$storeId[0]["id"];

    $result = false;
    //var_dump($itemId);
    //var_dump($storeId);
    if ($itemId == NULL) {
        $target_string = 'INTO item (name, photo, description, price, storeid) VALUES (' .
            "'" . $json_obj->name . "'" . ',' .
            "'" . $json_obj->photo . "'" . ',' .
            "'" . $json_obj->description . "'" . ',' .
            $json_obj->price . ',' .
            $storeId . ')';
        $result = database('INSERT', $target_string);
    } else {
        $target_string = ' item SET ' .
            "name = '" . $json_obj->name . "', " .
            "photo = '" . $json_obj->photo . "', " .
            "description = '" . $json_obj->description . "', " .
            "price = " . $json_obj->price . ", " .
            "storeid = " . $storeId .
            " WHERE id = " . $itemId;
        $result = database('UPDATE', $target_string);
    }
    //var_dump($target_string);
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
