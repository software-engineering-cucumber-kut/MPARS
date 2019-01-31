<?php
include('reservationHeader.php');
?>
    <!-- Start your code here -->
    <script type="text/javascript" src="js/deleteReservation.js"></script>
    <link rel="stylesheet" type="text/css" href="css/managementReservation.css">
    <link rel="stylesheet" type="text/css" href="css/deleteReservation.css">
    
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
        <!--幅調節のため非表示で挿入-->
        <div class="col-sm-10" style="margin-top:15px;">
        <div align="right" style="margin-top:29px; color:white">_</div>
        </div>
    </div>
    </div>

  <div class="h1">
    <center>
      <font color="white">予約一覧</font>
    </center>
  </div>
    <br><br><br>
    <br><br><br>
    <center>
        <p>予約が取り消されました.</p>
        <button type="button" class="btn btn-primary" onclick="back()">戻る</button>
    </center>

    <!-- End your code here -->
<?php
include('reservationFooter.php');
?>
