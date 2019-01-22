<!DOCTYPE html>
<html lang ="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>
  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="managementReservation.js"></script>
  <link rel="stylesheet" type="text/css" href="managementReservation.css">

  <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--<script src="js/bootstrap.min.js"></script>-->
  <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">
</head>

<body>
  <img src="logo.jpg" width="125" height="70" align="top">
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
                          window.location.href = "deleteReservation.php";
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

  <div id="showReservation-body">
  </div>
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
  </table>

  <!--<script type="text/javascript" src="js/getCompReservation.js"></script>
  <script type="text/javascript">
      getReservation();
  </script>-->
</body>
</html>
