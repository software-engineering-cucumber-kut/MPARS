<?php
include('managerHeader.php');
?>
<script type="text/javascript" src="js/a_getProducts.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu.css">
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
        <div class="row text-left">
            <div class="col-md-12">
                <h4>Bread</h4>
                <input type="button" value="追加" class="btn btn-primary" onclick="Addproduct()" />
                <hr>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/noimage.jpg" alt="カードの画像">
                    <div class="card-body">
                        <span style="float:right;">点</span><span style="float:right;">2</span><h3 class="card-title" align="left">サンドイッチ</h3>
                        <p class="card-text">具だくさんでボリュームがあります♪</p>
                        <span style="float:right;">250</span><span style="float:right;">￥</span>
                        <a href="editDetailProduct.php" class="btn btn-primary" onclick="Editproduct()">編集</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row" id="breads">
        </div>
        <br>
        <div class="row text-left">
            <div class="col-md-12">
                <h4>Sweets</h4>
                <input type="button" value="追加" class="btn btn-primary" onclick="Addproduct()" />
                <hr>
            </div>
        </div>
        <br>
        <div class="row" id="sweets">
        </div>
        <br>
        <div class="row text-left">
            <div class="col-md-12">
                <h4>Drink</h4>
                <input type="button" value="追加" class="btn btn-primary" onclick="Addproduct()" />
                <hr>
            </div>
        </div>
        <br>
        <div class="row" id="drinks">
        </div>
    </div>
    <!-- End your code here -->
<?php
include('managerFooter.php');
