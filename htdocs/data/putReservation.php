{
  "success":<?php
session_start();
if (isset($_SESSION['id'])) {
    require('database.php');
    global $last_insert_id;
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    $target_string = 'INTO reservation (userid, receiveday) VALUES (' .
        $_SESSION['id'] . ',\'' .
        date("Y-m-d H:i:s", strtotime('+1 day')) .
        "')";
    database('INSERT', $target_string);

    $reservation_id = $last_insert_id;
    foreach ($json_obj->products as $val) {
        $target_string = 'INTO reservationitems (reservationid, itemid, amount) VALUES (' .
            $reservation_id . ',' .
            $val->itemid . ',' .
            $val->amount . ')';
        $dbaccess_result = database('INSERT', $target_string);
        if (!$dbaccess_result) {
            echo "0";
            exit();
        }
    }
    echo "1";
}
 ?>
}
