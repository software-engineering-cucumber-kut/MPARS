<?php
include('managerHeader.php');
?>
<style>
.header-img {
    max-width: 500px;
}
</style>
<div class="container-fluid">
    <div class="row">
    <!--グリッドシステムではcol-lg(md,sm,xs)は12段階で画面を分割できる-->
        <div class="col-md-4">
        <div class="d-flex">
        <div class="header-img"><img src="/img/logo.svg" width="140"></div>
        </div>
        </div>

        <div class="col-sm-8 text-right">
        <a href="manager.php" style="font-size:30px;">管理者メニューへ</a>
        </div>
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">-->
    </div>
    <br>


    <div class="row">
    <div align = "center" class="col-md-12" style="background-color:#8EB8FF">
    <h2> <font color="white" face="ＭＳ 明朝">リクエスト一覧</font> </h2>
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
