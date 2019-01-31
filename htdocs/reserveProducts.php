<?php
include('reservationHeader.php');
?>

<br>
<div class="container-fluid" >
    <div class="row">
    <!--グリッドシステムではcol-lg(md,sm,xs)は12段階で画面を分割できる-->
    <!--ロゴの表示と『HOMEへ』ボタン-->
        <div class="col-sm-2" >
        <div class="d-flex">
        <div class="header-img"><img src="img/logo.svg" width = "140" ></div>
        </div>
        </div>

        <div class="col-sm-8"></div>
        <div align = "right" class="col-sm-2" style="margin-top:15px;">
        <div align="right"><button type="button" class="btn btn-primary" style="margin-top:15px;" onclick="back1()">予約済み商品</button>
        <button type="button" class="btn btn-primary" style="margin-top:15px;" onclick="back2()">ログアウト</button></div>
        </div>  
    </div>
</div>
<!--
  <img src="img/logo.jpg" width="125" height="70" align="top">
  <div align="right"><button type="button" class="btn btn-primary" onclick="back1()">予約済商品</button>
  <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button></div>
  -->
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
