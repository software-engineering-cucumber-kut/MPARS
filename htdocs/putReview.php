{
  "success":<?php
    require "database.php";

    // タイムゾーン設定
    date_default_timezone_set('Asia/Tokyo');

    if (isset($_GET['reviewPoint'])) {
      $reviewPoint = $_GET['reviewPoint'];
    }

    // 入力されたコメントと受信時刻を取得
    if (isset($_GET['reviewComment'])) {
      $reviewComment = $_GET['reviewComment'];
      $timestamp = time();
    }

    // database.phpに投げるSQL文
    /*database("INSERT", "INTO review VALUES (id, itemid, $reviewComment, replyid, $reviewPoint, $timestamp");*/

    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    /*$dbaccess_result = database(INSERT, INTO review VALUES ( NULL, itemid, $reviewComment, replyid, $reviewPoint, $timestamp));*/

    $dbaccess_result = database('INSERT', 'INTO review (id, itemid, contents, replyid, evaluation, datetime) VALUES(NULL, ' . "'" . $json_obj->itemid . "'" . ',' . "'" . $json_obj->contents . "'" . ',' . NULL . ',' . "'" . $json_obj->evaluation . "'" . ',' .  "'" . $timestamp . "'" . ')');

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
    
    if ($dbaccess_result) {
      echo "1";
    } else {
      echo "0";
    }
    try {


  ?>
}
