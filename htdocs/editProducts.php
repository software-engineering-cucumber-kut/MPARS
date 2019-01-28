<?php
include('managerHeader.php');
?>
<!--<link rel="stylesheet" type="text/css" href="css/menu.css">-->
<link rel="stylesheet" type="text/css" href="css/editProducts.css">

<body>
    <!-- Start your code here -->

    <!--header部分-->
    <img src="img/logo.jpg" width="125" height="70" align="top">
    <div align="right"><a href="manager.php">管理者ホームへ</a></div>
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
