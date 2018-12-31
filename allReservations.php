<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MPARS</title>

    <!-- cssの読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/allReservations.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- jsの読み込み -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="allReservations.js"></script>

     <!-- jQuery読み込み -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>

  <body>
    <!--header部分-->
    <img src="logo.jpg" width="125" height="70" align="top">
    <div align="right"><a href="manager.php">管理者ホームへ</a></div>
    <br>
    <div class="h1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12" style="background-color:blue;"><center><font color="white">予約一覧</font></center>
          </div>
        </div>
      </div>
    </div>

    <center><font size="5"><div id="table"></div></font></center>

    <!--<table border="2" width="700" align="center">
    <tr bgcolor="#d2691e" align="center">
      <td>予約日</td>
      <td>受取日時</td>
      <td>予約内容</td>
      <td>学籍番号<br>またはID</td>
      <td>詳細情報</td>
    </tr>
    <tr bgcolor="#d2691e" align="center">
      <td>2-1</td>
      <td>2-2</td>
      <td>2-3</td>
      <td>2-4</td>
      <td>2-5</td>
    </tr>
    </table>
    </div>
  -->
  </body>
</html>
