  {
    "success:"
<?php
    require('database.php');

    // タイムゾーン設定
    date_default_timezone_set('Asia/Tokyo');
/*
    if (isset($_GET['reviewPoint'])) {
      $reviewPoint = $_GET['reviewPoint'];
    }

    // 入力されたコメントと受信時刻を取得
    if (isset($_GET['reviewComment'])) {
      $reviewComment = $_GET['reviewComment'];
      $timestamp = time();
    }
    // database.phpに投げるSQL文
    database("INSERT", "INTO review VALUES (id, itemid, $reviewComment, replyid, $reviewPoint, $timestamp");*/

    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    /*$dbaccess_result = database(INSERT, INTO review VALUES ( NULL, itemid, $reviewComment, replyid, $reviewPoint, $timestamp));*/
    /*
    $dbaccess_result = database('INSERT', 'INTO review (id, itemid, contents, replyid, evaluation, datetime) VALUES(NULL, ' . "'" . $json_obj->itemid . "'" . ',' . "'" . $json_obj->contents . "'" . ',' . NULL . ',' . "'" . $json_obj->evaluation . "'" . ',' .  "'" . $timestamp . "'" . ')');
    */
    $target_string = 'INTO review (itemid, contents, replyid, evaluation, datetime) VALUES (' .
    $json_obj->itemid . ',' .
    "'" . $json_obj->contents . "'" . ',' .
    $json_obj->replyid . ',' .
    $json_obj->evaluation . ',' .
    "'" . $json_obj->datetime . "');";
    /*$target_string = ' INTO reviewtest (contents) VALUES (' . "'" . $json_obj->contents . "');";*/
    $dbaccess_result = database('INSERT', $target_string);
    // SQL文
    /*$sql = " INSERT INTO review VALUES (id, itemid, $reviewComment, replyid, $reviewPoint, $timestamp) ";
    if ($result = $mysqli -> query($sql)) {

      $result -> close();
    } else {
      exit(' 送信に失敗しました ');
    }
    // Database終了

    $mysqli -> close();
    */
    // テスト用
    if ($dbaccess_result) {
      echo "1";
    } else {
      echo "0";
    }
  ?>
}
