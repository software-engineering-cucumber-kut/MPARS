{
  "success":<?php
  session_start();
  if (isset($_SESSION['id'])) {
    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    $target_string = 'INTO reservation
    (userid, recieved, receiveday)
    VALUES (' .
    $json_obj->userid . ',' .
    $json_obj->received . ',' . "'" .
    $json_obj->receiveday . "')";
    $dbaccess_result = database('INSERT', $target_string);
    if ($dbaccess_result) {
      echo "1";
    } else {
      echo "0";
    }
  }
 ?>
}
