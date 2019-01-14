<!DOCTYPE html>
<html lang ="ja">

<head>
  <!--
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>
  <script type="text/javascript" src="getHomeInfo.js"></script>
  <link rel="stylesheet" type="text/css" href="editHome.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>

  <!-- Bootstrapのための各種cssファイル読み込み -->
  <link rel="stylesheet"    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <!-- jQueryのjsファイル読み込み -->
  <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
  <link rel="stylesheet" href="editHome.css">
  <script type="text/javascript" src="/htdocs/js/getHomeInfo.js"></script>
  <script type="text/javascript" src="/htdocs/js/sendEditHome.js"></script>
</head>

<body>
  <img src="logo.svg" width="140">
  <div align="right" style="font-size:30px;"><a href="manager.php">管理者ホームへ</a></div>
  <div class="h1">
    <center>
      <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">店舗情報編集</font> </h2>
    </center>
  </div>
  <br>
<div class="body">
  <div class="firstInfo">
    <div class="businessAndPlace">
      <!-- 営業時間 -->
      <div class="businessHour">
        <div class="businessHourBackground">
          <font color="white" face="ＭＳ 明朝" style="font-size:20px;">
            <p>　　営業時間</p>
          </font>
        </div>
        <textarea rows="2" cols="40"></textarea>
      </div>
      <!-- 場所 -->
      <div class="place">
        <div class="placeBackground">
          <font color="white" face="ＭＳ 明朝" style="font-size:20px;">
            <p>　　場所</p>
          </font>
        </div>
        <textarea rows="2" cols="40"></textarea>
      </div>
    </div>
    <div class="map">
      <img src="map.svg" width="150" height="150" align="top">
      <font style="font-size:5px;">
      <form enctype="multipart/form-data"  action="editProducts.php" method="post" name="info">
      <input type="file" id="select_photo" accept="image/*" onchange="previewFile()" required>
      </font>
    </div>
    <div class="sns">
      <a class="twitter-timeline" width="200" height="200" align="right" href="https://twitter.com/MiyanokuchiT?ref_src=twsrc%5Etfw">Tweets by MiyanokuchiT</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
  <div class="secondInfo">
    <div class="eventInfo">
      <div class="eventInfoBackground">
        <font color="white" face="ＭＳ 明朝" style="font-size:20px;">
          <p>　　EVENT INFOS</p>
        </font>
      </div>
      <textarea rows="5" cols="60"></textarea>
    </div>
    <div class="outsidePhoto">
      <img src="outside.svg" width="180" height="180" align="top">
      <font style="font-size:5px;">
      <form enctype="multipart/form-data"  action="editProducts.php" method="post" name="info">
      <input type="file" id="select_photo" accept="image/*" onchange="previewFile()" required>
      </font>
    </div>
  </div>
  <div class="thirdInfo">
    <div class="contactInfos">
      <div class="contactInfoBackground">
        <font color="white" face="ＭＳ 明朝" style="font-size:20px;">
          <p>　　CONTACT INFOS</p>
        </font>
      </div>
      <textarea rows="8" cols="60"></textarea>
    </div>
    <div class="calendar">
    </div>
  </div>
  <div class="button_wrapper">
    <center>
    <input type="button" value="保存" class="submit" onclick="sendEditHome()" />
    </center>
  </div>
</div>
</body>
<?php require "footer.php";?>
</html>
