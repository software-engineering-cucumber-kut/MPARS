{
"success":<?php
session_start();
if ($_SESSION["id"] != NULL) {

    require('database.php');
    //    $json_string = file_get_contents('php://input');
    //    $json_obj = json_decode($json_string);
    //    $target_string = 'FROM reservation WHERE reservationid = ' .
    //    $json_obj->reservationid . ";";
    // 予約idを取得
    $target_string = 'id FROM reservation WHERE userid = ' . $_SESSION["id"] . ' AND receiveday >= now()';
    $dbaccess_result = database('SELECT', $target_string);
    if ($dbaccess_result === null) {
        echo"0\n}";
        return;
    }

    // まずreservationitemsから削除
    $reservationid = $dbaccess_result[0]["id"];
    $target_string = 'FROM reservationitems WHERE reservationid = ' . $reservationid;
    $dbaccess_result = database('DELETE', $target_string);

    $target_string = 'FROM reservation WHERE id = ' . $reservationid . ' AND receiveday >= now()';
    $dbaccess_result = database('DELETE', $target_string);
    if ($dbaccess_result) {
        echo "1";
    } else {
        echo "0";
    }
}
 ?>
}
