<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MPARS</title>
        <script type="text/javascript" src="sendProducts.js"></script>
        <!--<script type="text/javascript" src="getProducts.js"></script>-->
        <link rel="stylesheet" type="text/css" href="menu.css">
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
    <img src="logo.jpg" width="125" height="70" align="top">
    <div align="right"><a href="manager.php">管理者ホームへ</a></div>
    <div class="h1">
        <center><font color="white">メニュー編集</font></center>
    </div>
    <br>
    
        <!-- 商品追加のフォーム -->
    <form enctype="multipart/form-data"  action="editProducts.php" method="post" name="info">
        <!-- 商品画像の選択 -->
        <input type="file" id="select_photo" accept="image/*" onchange="previewFile()" required>
        <br>
        <br>
        <!-- 初期画像 -->
        <img id="photo" src="noimage.jpg" height="100" width="100">
 
       
        <p>
            <label>商品名:</label><br>
            <input type="text" id="name" placeholder="メロンパン" maxlength="20" required><!--required(入力必須)-->
        </p>
        <p>
            <label>値段:</label><br>
            <input type="text" id="price" placeholder="250" required>
            ￥
        </p>
        <p>
            <label>商品説明文:</label><br>
            <textarea id="description" placeholder="テキストを入力して下さい。(500文字以内)" maxlength="500" cols="50" rows="4" required></textarea>
        </p>
        <p>
            <input type="submit" value="保存" class="btn btn-primary" onclick="Saveproduct()" />
        </p>
        
    </form>
    
    <!-- End your code here -->
</body>

</html>
