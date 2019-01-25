<?php
include( 'reservationHeader.php' );
?>
<link rel="stylesheet" type="text/css" href="css/allReservations.css">
<img src="img/logo.jpg" width="125" height="70" align="top">
<div align="right"><a href="manager.php">管理者ホームへ</a>
</div>
<div class="h1">
    <center>
        <font color="white">予約一覧</font>
    </center>
</div>
<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>予約日</th>
                            <th>受取日時</th>
                            <th>予約内容</th>
                            <th>学籍番号またはID</th>
                            <th>詳細情報</th>
                        </tr>
                    </thead>
                    <tbody id="allReservations">
                    </tbody>
                </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/getAllReservations.js"></script>
<script type="text/javascript">
    getAllReservation();
</script>
<?php
include( 'reservationFooter.php' );