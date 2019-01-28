<?php
include('reservationHeader.php');
?>

  <img src="img/logo.jpg" width="125" height="70" align="top">
  <div align="right"><button type="button" class="btn btn-primary" onclick="back1()">予約済商品</button>
  <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button></div>
  <div class="h1">
    <center>
      <font color="white">予約メニュー一覧</font>
    </center>
  </div>
  <br>

<div class="container-fluid">
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Items</h4>
            <hr>
        </div>
    </div>
    <br>
    <div class="row" id="items">
    </div>
</div>
  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="js/reserveProducts.js"></script>
  <script type="text/javascript" src="js/getAvailableProducts.js"></script>
  <link rel="stylesheet" type="text/css" href="css/reserveProducts.css">
<?php
include('reservationFooter.php');
?>
