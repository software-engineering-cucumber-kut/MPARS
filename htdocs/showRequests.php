<?php
include('managerHeader.php');
?>
<style>
.header-img {
    max-width: 500px;
}
</style>
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
</div>

    <br><br>
    <div class="row">
    <div align = "center" class="col-md-12" style="background-color:#8EB8FF;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">リクエスト一覧</font> </h2>
    </div>
    </div>

    <br>
    <div id="requests-body">

    </div>
    <br>
    <div class = "row">
        <div class="col-md-12">
            <ul class="list-group list-group-flush">
            </ul>
        </div>
    </div>

    <br>

</div>
<script type="text/javascript" src="js/getRequests.js"></script>
<script type="text/javascript">
    getRequests();
</script>
<?php
include('managerFooter.php');
?>
