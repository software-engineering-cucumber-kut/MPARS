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

<div class="firstInfo">
  <div class="businessAndPlace">
    <!-- 営業時間 -->
    <div class="businessHour">
      <p>営業時間</P>
      <textarea></textarea>
    </div>
    <!-- 場所 -->
    <div class="place">
      <p>場所</p>
      <textarea></textarea>
    </div>
  </div>
  <div class="map">
    <img src="map.svg" width="200" height="200" align="top">

  </div>
  <div class="sns">
    <a class="twitter-timeline" width="200" height="200" align="right" href="https://twitter.com/MiyanokuchiT?ref_src=twsrc%5Etfw">Tweets by MiyanokuchiT</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
</div>
</body>
<?php require "footer.php";?>
</html>
