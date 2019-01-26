<?php
include( 'reservationHeader.php' );
?>
<!--jsとcssの読み込み-->
<script src="js/sendReserveProducts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/checkReservation.js"></script>
<link rel="stylesheet" type="text/css" href="css/checkReservation.css">

<img src="img/logo.jpg" width="125" height="70" align="top">
<div align="right"><button type="button" class="btn btn-primary" onclick="back1()">戻る</button>
    <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button>
</div>
<div class="h1">
    <center>
        <font color="white">予約内容</font>
    </center>
</div>
<br>
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

    <div class="row">
        <div class="col-md-6 text-center">
            <button type="button" class="btn btn-primary" onclick="sendReserveProducts()">予約を完了する</button>
        </div>
        <div class="col-md-6 text-center">
            <button type="button" class="btn btn-secondary" onclick="back4()">選択画面に戻る</button>
        </div>
    </div>
</div>
<?php
include( 'reservationFooter.php' );
?>