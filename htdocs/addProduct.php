<?php
include('managerHeader.php');
?>
<script src="js/sendImage.js"></script>
<script type="text/javascript" src="js/a_sendProduct.js"></script>
<script type="text/javascript" src="js/sendProduct.js"></script>
<link rel="stylesheet" type="text/css" href="css/addproduct.css">

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
        <u> <a href="manager.php" style="font-size:30px;">管理者ホームへ</a></u>
        </div> 
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">--> 
    </div>
    <br>  

    <div class="row">
        <div align = "center" class="col-sm-12" style="background-color:#8EB8FF;">
            <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">メニュー編集</font> </h2>
        </div>
    </div>
    <br>
</div>

    <form id="imgForm">
        <input type="file" name="image" id="select_photo" accept="image/*" onchange="previewFile()" required>
    </form>
    <br>
    <br>
    <!-- 商品追加のフォーム -->
    <form method="post" name="info">
        <!-- 商品画像の選択 -->
        <!-- 初期画像 -->
        <img id="photo" src="img/noimage.jpg" height="100" width="100">

        <br><br>
        <b><label>商品名:</label></b>
        <br>
        <input type="text" id="name" placeholder="メロンパン" maxlength="20" required>
        <!--required(入力必須)-->

        <br><br>
        <b><label>値段:</label></b>
        <br>
        <input type="number" id="price" placeholder="250" required>￥

        <br><br>
        <b><label>商品説明文:</label></b>
        <br>
        <textarea id="description" placeholder="テキストを入力して下さい。(500文字以内)" maxlength="500" cols="50" rows="4" required></textarea>

        <br><br>
        <b><label>店名:</label></b>
        <br>
        <textarea id="storename" placeholder="お店の名前を入力してください。" maxlength="50" cols="50" rows="1" required></textarea>

        <br>
        <input type="button" value="保存" class="btn btn-primary" onclick="sendProduct()" />

    </form>
    <!-- End your code here -->

<div id="b"></div>
<?php
include('managerFooter.php');
?>
