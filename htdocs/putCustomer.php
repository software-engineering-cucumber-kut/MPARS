{
  "success":
  <?php
  //session_start();
  //if (isset($_SESSION['id'])) {
    require('database.php');
    // global $last_insert_id;
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    // 学生と一般を分ける
    /*
    $student = $json_obj->studentuser;
    $general = $json_obj->generaluser;
    */
    $typeOfUser = $json_obj->type;
    //if ($student != NULL) {
    if ($typeOfUser == 1)
      // 学生アカウント
      $target_string = 'INTO studentuser (id, name, phonenumber, password) VALUES (' .
      $json_obj->id . ',' .
      "'"$json_obj->name . "'" . ',' .
      $json_obj->phonenumber . ',' .
      "'" . $json_obj->password . "');";
      $dbaccess_result = database('INSERT', $target_string);
    } else {
      // 一般アカウント
      $target_string = 'INTO generaluser (id, name, phonenumber, password, address, birthday, mail) VALUES (' .
      $json_obj->id . ',' .
      "'" . $json_obj->name . "'" . ',' .
      $json_obj->phonenumber . ',' .
      "'" . $json_obj->password . "'". ',' .
      "'" . $json_obj->address . "'" . ',' .
      "'" . $json_obj->birthday . "'" . ',' .
      "'" . $json_obj->mail ."');";
      $dbaccess_result = database('INSERT', $target_string);
    }
  //}
  // Test
  if ($dbaccess_result) {
    echo "1";
  } else {
    echo "0";
  }
 ?>
}
