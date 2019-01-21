{
  "success":<?php
  //session_start();

    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    $target_string = 'FROM reservation WHERE reservationid = ' .
    $json_obj->reservationid . ";";
    $dbaccess_result = database('DELETE', $target_string);
    if ($dbaccess_result) {
      echo "1";
    } else {
      echo "0";
    }
 ?>
}
