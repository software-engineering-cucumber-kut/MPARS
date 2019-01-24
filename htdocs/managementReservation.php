<?php
include('reservationHeader.php');
?>
  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="js/managementReservation.js"></script>
  <script type="text/javascript" src="js/deleteReservation.js"></script>
  <link rel="stylesheet" type="text/css" href="css/managementReservation.css">

  <img src="img/logo.jpg" width="125" height="70" align="top">
  <div align="right"><button type="button" class="btn btn-primary" onclick="back1()">戻る</button>
  <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button></div>
  <div class="h1">
    <center>
      <font color="white">予約一覧</font>
    </center>
  </div>
  <br>

  <!--<div align="right"><button type="button" class="btn btn-primary" id="delete">予約取消</button></div>-->

  <div align="right">
    <input type="button" value="予約取消" class="btn btn-primary" id="delete" />
  </div>
  <script type="text/javascript" src="js/getCompReservation.js"></script>
  <script type="text/javascript">
      $(function() {
          $("#delete").click(function() {
              $("#dialog1").dialog({
                  modal: true,
                  title: "確認画面",
                  buttons: {
                      "はい": function() {
                          $(this).dialog("close");
                          deleteReservation();
                      },
                      "いいえ": function() {
                          $(this).dialog("close");
                      }
                  }
              });
          });
      });
      getReservation();
  </script>
  <div id="dialog1" style="display:none;">
      <p>この予約を取り消しますか?</p>
  </div>

  <h2>予約済内容</h2>

  <table border="2" width="700" align="center" id="showReservation-body">
  <tr bgcolor="orange" align="center">
    <td>商品名</td>
    <td>個数</td>
    <td>値段</td>
  </table>

  <!--<script type="text/javascript" src="js/getCompReservation.js"></script>
  <script type="text/javascript">
      getReservation();
  </script>-->
<?php
include('reservationFooter.php');
?>
