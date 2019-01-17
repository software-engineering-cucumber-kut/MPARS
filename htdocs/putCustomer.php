{
  "success:"
  <?php
    // session_start();
    // if (isset($_SESSION['id'])) {
    // require('database.php');
    // global $last_insert_id;
    // $json_string = file_get_contents('php://input');
    // $json_obj = json_decode($json_string);

    // 学生と一般を分ける
    // student(); // Test
    // general(); // Test
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    if($json_obj->isstudent == 1){
      // 学生アカウント
      require('database.php');
      $json_string = file_get_contents('php://input');
      $json_obj = json_decode($json_string);

      $target_string = 'INTO studentuser (id, name, phonenumber, password) VALUES (' .
      $json_obj->id . ',' .
      "'" . $json_obj->name . "'" . ',' .
      "'" . $json_obj->phonenumber . "'" . ',' .
      "'" . $json_obj->password . "');";
      $dbaccess_result = database('INSERT', $target_string);
      // Test
      if ($dbaccess_result) {
        echo "1";
      } else {
        echo "0";
      }
    } else {
      // 一般アカウント
      require('database.php');
      $json_string = file_get_contents('php://input');
      $json_obj = json_decode($json_string);

      $target_string = 'INTO generaluser (id, name, phonenumber, password, address, birthday, mail) VALUES (' .
      $json_obj->id . ',' .
      "'" . $json_obj->name . "'" . ',' .
      $json_obj->phonenumber . ',' .
      "'" . $json_obj->password . "'". ',' .
      "'" . $json_obj->address . "'" . ',' .
      "'" . $json_obj->birthday . "'" . ',' .
      "'" . $json_obj->mail . "');";
      $dbaccess_result = database('INSERT', $target_string);
      // Test
      if ($dbaccess_result) {
        echo "1";
      } else {
        echo "0";
      }
    }
 ?>
}
