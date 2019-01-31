<?php
include('managerHeader.php');
?>
<!--<link rel="stylesheet" type="text/css" href="css/menu.css">-->
<link rel="stylesheet" type="text/css" href="css/editProducts.css">
<script type="text/javascript">sessionStorage.clear()</script>

<body>
    <!-- Start your code here -->

    <!--header部分-->
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
    <div class="row">
        <div align = "center" class="col-sm-12" style="background-color:#8EB8FF;">
            <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">メニュー編集</font> </h2>
        </div>
    </div>
    <br>

    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-md-12">
                <h4>Items</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="button" value="新規追加" class="btn btn-primary" onclick="Addproduct()" />
            </div>
        </div>
        <div class="row" id="items">
        </div>
    </div>
    <!-- End your code here -->
<script type="text/javascript" src="js/a_getProducts.js"></script>
<script type="text/javascript" src="js/editProducts.js"></script>
<?php
include('managerFooter.php');
