<?php
function putReview() {
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
  database("INSERT", "INTO review VALUES (id, itemid, $reviewComment, replyid, $reviewPoint, $timestamp");

  // SQL文
  /*$sql = " INSERT INTO review VALUES (id, itemid, $reviewComment, replyid, $reviewPoint, $timestamp) ";
  if ($result = $mysqli -> query($sql)) {

    $result -> close();
  } else {
    exit(' 送信に失敗しました ');
  }*/
  // Database終了

  $mysqli -> close();
}
?>