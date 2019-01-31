<?php
include( 'reservationHeader.php' );
?>
<!--jsとcssの読み込み-->
<script src="js/sendReserveProducts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/checkReservation.js"></script>
<link rel="stylesheet" type="text/css" href="css/checkReservation.css">

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

<!--
<img src="img/logo.jpg" width="125" height="70" align="top">
<div align="right"><button type="button" class="btn btn-primary" onclick="back1()">戻る</button>
    <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button>
</div>
-->

<div class="h1">
    <center>
        <font color="white">予約内容</font>
    </center>
</div>
<br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mx-auto text-center">
            <table class="table table-bordered">
                <thead>
                    <tr bgcolor="orange">
                        <th scope="col">商品名</th>
                        <th scope="col">個数</th>
                        <th scope="col">単価</th>
                    </tr>
                </thead>
                <tbody id="reservationProductsTable">
                </tbody>
            </table>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-5 text-right">
            <button type="button" class="btn btn-primary" onclick="sendReserveProducts()">予約を完了する</button>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 text-left">
            <button type="button" class="btn btn-secondary" onclick="back4()">選択画面に戻る</button>
        </div>
    </div>
</div>
<?php
include( 'reservationFooter.php' );
?>