<!DOCTYPE html>
<html lang ="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="js/stock.js"></script>
  <script type="text/javascript" src="js/sendStock.js"></script>
  <link rel="stylesheet" type="text/css" href="css/stock.css">

</head>

<body>
  <!--header部分-->
    <img src="img/logo.jpg" width="125" height="70" align="top">
    <div align="right"><a href="manager.php">管理者ホームへ</a></div>
    <div class="h1">
      <center>
        <font color="white">在庫編集</font>
      </center>
    </div>
    <br>
    <div align="left">在庫編集日<br></div>
<!--
      &nbsp;
      <a href=>
        <script>
        var hiduke=new Date();
        var year = hiduke.getFullYear();
        var month = hiduke.getMonth()+1;
        var week = hiduke.getDay()+4;
        var day = hiduke.getDate()+4;
        //var yobi= new Array("日","月","火","水","木","金","土");
        //document.write(month+"/"+day+"("+yobi[week]+")  ");
        document.write(month+"/"+day);
        </script>
      </a>
  </div>-->

  <div class="dateSlide">
    <ul class="dateSlideList">
        <a href=><li class="date01"></li></a>
        <a href=><li class="date02"></li></a>
        <a href=><li class="date03"></li></a>
        <a href=><li class="date04"></li></a>
        <a href=><li class="date05"></li></a>
    </ul>
  </div>

<!-- ここに商品の予約上限を決める画面のプログラムを入れる-->
<div class="container-fluid">
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Bread</h4>
            <hr>
        </div>
    </div>
    <br>
    <div class="row" id="breads">
    </div>
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Sweets</h4>
            <hr>
        </div>
    </div>
    <br>
    <div class="row" id="sweets">
    </div>
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Drink</h4>
            <hr>
        </div>
    </div>
    <br>
    <div class="row" id="drinks">
    </div>
</div>

  <script type="text/javascript" src="js/getAvailableProducts.js?2"></script>

  <center>
  <input type="button" value="保存" onclick="save()" />
  </center>

  </body>
</html>
