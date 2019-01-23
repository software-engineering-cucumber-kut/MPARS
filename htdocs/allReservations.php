<!DOCTYPE html>
<html lang ="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>
  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="js/a_allReservations.js"></script>


  <link rel="stylesheet" type="text/css" href="css/allReservations.css">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
  <body>
      <img src="img/logo.jpg" width="125" height="70" align="top">
      <div align="right"><a href="manager.php">管理者ホームへ</a></div>
      <div class="h1">
        <center>
          <font color="white">予約一覧</font>
        </center>
      </div>
      <br>
      <br>
      <center>
      <div id ="table"></div>
      <div id ="AllReservations"></div>
      </center>

      <script type="text/javascript" src="js/getAllReservations.js"></script>
      <script type="text/javascript">
        getAllReservation();
      </script>
  </body>
</html>
