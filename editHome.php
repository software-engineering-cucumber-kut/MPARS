<!DOCTYPE html>
<html lang ="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>
  <script type="text/javascript" src="getHomeInfo.js"></script>
  <link rel="stylesheet" type="text/css" href="editHome.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <img src="logo.svg" width="125" height="70" align="top">
  <div align="right"><a href="manager.php">管理者ホームへ</a></div>
  <div class="h1">
    <center>
      <font color="white">店舗情報編集</font>
    </center>
  </div>
  <br>
<div class="body">
  <div class="firstInfo">
    <div class="businessAndPlace">
      <!-- 営業時間 -->
      <div class="businessHour">
        <p>営業時間</P>
        <textarea rows="3" cols="40"></textarea>
      </div>
      <!-- 場所 -->
      <div class="place">
        <p>場所</p>
        <textarea rows="2" cols="40"></textarea>
      </div>
    </div>
    <div class="map">
      <img src="map.svg" width="200" height="200" align="top">
    </div>
    <div class="sns">
      <a class="twitter-timeline" width="200" height="200" align="right" href="https://twitter.com/MiyanokuchiT?ref_src=twsrc%5Etfw">Tweets by MiyanokuchiT</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
  <div class="secondInfo">
    <div class="eventInfo">
      <p>EVENT INFOS</p>
      <textarea rows="8" cols="60"></textarea>
    </div>
    <div class="outsidePhoto">
      <img src="outside.svg" width="200" height="200" align="top">
    </div>
  </div>
  <div class="thirdInfo">
    <div class="contactInfos">
      <p>CONTACT INFOS</p>
      <textarea rows="5" cols="50"></textarea>
    </div>
    <div class="calendar">
    </div>
  </div>
  <div class="button_wrapper">
    <center>
    <input type="button" value="保存" class="submit" onclick="compEditHome()" />
    </center>
  </div>
</div>
</body>
<?php require "footer.php";?>
</html>
