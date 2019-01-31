<?php
include('reservationHeader.php');
?>
  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="js/managementReservation.js"></script>
  <script type="text/javascript" src="js/deleteReservation.js?"></script>
  <link rel="stylesheet" type="text/css" href="css/managementReservation.css">
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
        <div align="right"><button type="button" class="btn btn-primary" style="margin-top:15px;" onclick="back1()">戻る</button>
        <button type="button" class="btn btn-primary" style="margin-top:15px;" onclick="back2()">ログアウト</button></div>
        </div>  
    </div>
</div>

    <div class="h1">
    <center>
      <font color="white">予約済みメニュー一覧</font>
    </center>
    </div>
    <br><br>

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
