{
  "success":<?php
  session_start();
  if (isset($_SESSION['id'])) {
    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    $target_string = 'INTO reservation (id, userid, recieved, reservationtime, receiveday) VALUES (NULL, ' .  "'" . $json_obj->userid . "'" . ',' . "'" . $json_obj->received . "'" . ',' . "'" . $json_obj->reservationtime . "'" . ',' . "'" . $json_obj->receiveday . ')';
    database('INSERT', $target_string);
    echo "1";
    echo "0";
    }
  }
 ?>
}
