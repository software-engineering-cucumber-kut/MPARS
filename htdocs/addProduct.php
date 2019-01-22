<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPARS</title>
    <script type="text/javascript" src="js/a_sendProduct.js"></script>
    <script type="text/javascript" src="js/sendProduct.js?"></script>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Start your code here -->

    <!--header部分-->
    <img src="img/logo.jpg" width="125" height="70" align="top">
    <div align="right"><a href="manager.php" style="font-size:20px;">管理者ホームへ</a></div>
    <div class="row">
        <div align = "center" class="col-sm-12" style="background-color:#8EB8FF;">
            <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">メニュー編集</font> </h2>
        </div>
    </div>
    <br>

    <!-- 商品追加のフォーム -->
    <form method="post" name="info">
        <!-- 商品画像の選択 -->
        <input type="file" id="select_photo" accept="image/*" onchange="previewFile()" required>
        <br>
        <br>
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

        <br>
        <input type="button" value="保存" class="btn btn-primary" onclick="sendProduct()" />

    </form>
    <!-- End your code here -->
</body>

</html>

<div id="b"></div>
