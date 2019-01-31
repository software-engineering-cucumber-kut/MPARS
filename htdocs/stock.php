<?php
include('managerHeader.php');
?>
<link href="css/manager.css?<?php echo date("YmdHis"); ?>" rel="stylesheet">

<br>
<div class="container-fluid">
    <div class="row">
    <!--グリッドシステムではcol-lg(md,sm,xs)は12段階で画面を分割できる-->
        <div class="col-md-8">
        <div class="header-img"><img src="img/logo.svg" width = "140"></div>
        </div>

        <div align = "right" class="col-md-4" style="margin-top:15px;">
        <u><a href="manager.php" style="font-size:30px;">管理者ホームへ</a></u>
        </div>
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">-->
    </div>
    <br>

    <div class="row">
    <div align = "center" class="col-md-12" style="background-color:#8EB8FF;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">在庫編集</font> </h2>
    </div>
    </div>
  <!--header部分-->
    <!--<img src="img/logo.jpg" width="125" height="70" align="top">
    <div align="right"><a href="manager.php">管理者ホームへ</a></div>
    <div class="h1">
      <center>
        <font color="white">在庫編集</font>
      </center>
    </div>
    <br>-->
    <!--<div align="left">在庫編集日<br></div>-->
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

  <!--<div class="dateSlide">
    <ul class="dateSlideList">
        <a href=><li class="date01"></li></a>
        <a href=><li class="date02"></li></a>
        <a href=><li class="date03"></li></a>
        <a href=><li class="date04"></li></a>
        <a href=><li class="date05"></li></a>
    </ul>
  </div>-->

<!-- ここに商品の予約上限を決める画面のプログラムを入れる-->
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

  <!--<script type="text/javascript" src="js/getAvailableProducts.js?3"></script>-->
  <script type="text/javascript" src="js/stock.js"></script>
  <script type="text/javascript" src="js/sendStock.js"></script>

  <br>
  <br>
  <center>
  <input type="button" value="保存" onclick="sendStock()" />
  </center>


  <?php
    include('managerFooter.php');
  ?>
