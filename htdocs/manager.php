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
        <u><a href="home.php" style="font-size:30px;">ログアウト</a></u>
        </div> 
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">--> 
    </div>
    <br>

    <div class="row">
    <div align = "center" class="col-md-12" style="background-color:#8EB8FF;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">管理者ホーム</font> </h2>
    </div>
    </div>
    
    <div class="row" id="menu">
        <div class="col-md-12 mx-auto">
            <div class="list-group list-group-flush">
                <a href="allReservations.php" class="list-group-item list-group-item-action">予約一覧</a>
                <a href="stock.php" class="list-group-item list-group-item-action">在庫編集</a>
                <a href="editProducts.php" class="list-group-item list-group-item-action">メニュー編集</a>
                <a href="showRequests.php" class="list-group-item list-group-item-action">リクエスト一覧</a>
                <a href="editHome.php" class="list-group-item list-group-item-action">店舗情報編集</a>
            </div>
        </div>
    </div>
</div>
<?php
include('reservationFooter.php');
