<?php
include('reservationHeader.php');
?>
    <!--jsとcssの読み込み-->
    <script type="text/javascript" src="js/checkReservation.js"></script>
    <script type="text/javascript" src="js/sendReserveProducts.js"></script>
    <link rel="stylesheet" type="text/css" href="css/checkReservation.css">

    <img src="img/logo.jpg" width="125" height="70" align="top">
    <div align="right"><button type="button" class="btn btn-primary" onclick="back1()">戻る</button>
    <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button></div>
    <div class="h1">
      <center>
        <font color="white">予約内容</font>
      </center>
    </div>
    <br>
    <h2>予約内容</h2>
    <br>
      <table border="2" width="700" align="center">
        <tr bgcolor="orange" align="center">
          <td>商品名</td>
          <td>個数</td>
          <td>値段</td>
        </tr>
        <tr bgcolor="white" align="center">
          <td>クリームパン</td>
          <td>2個</td>
          <td>300円</td>
        </tr>
        <tr bgcolor="white" align="center">
          <td>マカロン</td>
          <td>3個</td>
          <td>300円</td>
        </tr>
      <table>
    <br>

    <div class="container-fluid">
      <div class="row">
        <h2>
        <div class="text-left col-lg-6"><button type="button" class="btn btn-primary" onclick="back3()">予約を完了する</button></
        <div class="text-right col-lg-6"><button type="button" class="btn btn-primary" onclick="back4()">選択画面に戻る</button>
        </h2>
      </div>
    </div>
    <script src="js/sendReserveProducts.js" type="text/javascript"></script>
<?php
include('reservationFooter.php');
?>
