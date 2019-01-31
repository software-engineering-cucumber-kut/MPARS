<?php
include( 'reservationHeader.php' );
?>
<link rel="stylesheet" type="text/css" href="css/allReservations.css">

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
</div>
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