{
  "success":<?php
  session_start();
  if (isset($_SESSION['id'])) {
    require('database.php');
    // global $last_insert_id;
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    // 学生と一般を分ける
    $student = $json_obj->studentuser;
    $general = $json_obj->generaluser;

    if ($student != NULL) {
      // 学生アカウント
      foreach ($student as $studentuser) {
        $target_string = 'INTO studentuser (id, name, phonenumber, password) VALUES (' . $json_obj->id . ',' . "'" . $json_obj->name . "'" . ',' . "'" . $json_obj->phonenumber . "'" . ',' . "'" . $json_obj->password . "'". ')';
        database('INSERT', $target_string);
      }
    } else {
      // 一般アカウント
      foreach ($generaluser as $generaluser) {
        $target_string = 'INTO generaluser (id, name, phonenumber, password, address, birthday, mail) VALUES (' . $json_obj->id . ',' . "'" . $json_obj->name . "'" . ',' . "'" . $json_obj->phonenumber . "'" . ',' . "'" . $json_obj->password . "'". ',' . "'" . $json_obj->address . "'" . ',' . "'" . $json_obj->birthday . "'" . ',' . "'" . $json_obj->mail . "'"
        ')';
        database('INSERT', $target_string);
      }
    }
  }
 ?>
}
