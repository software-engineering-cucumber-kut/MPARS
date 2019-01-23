<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPARS</title>
    <script type="text/javascript" src="js/a_getProducts.js"></script>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/editProducts.css">
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
    <div align="right"><a href="manager.php">管理者ホームへ</a></div>
    <div class="h1">
        <center>
            <font color="white">メニュー編集</font>
        </center>
    </div>
    <br>

    <!-- パンメニュー -->
    <div class="bread">
        <p>Bread menu</p>
        <p>
            <font size="1">パン</font>
        </p>
        <input type="button" value="追加" class="btn btn-primary" onclick="Addproduct()" />
        <hr color="#000000" size="1">
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="noimage.jpg" alt="カードの画像">
        <div class="card-body">
            <span style="float:right;">点</span><span style="float:right;">2</span><h3 class="card-title" align="left">サンドイッチ</h3>
            <p class="card-text">具だくさんでボリュームがあります♪</p>
            <span style="float:right;">250</span><span style="float:right;">￥</span>
            <a href="editDetailProduct.php" class="btn btn-primary" onclick="Editproduct()">編集</a>
        </div>
    </div>


    <!-- お菓子メニュー -->
    <div class="sweet">
        <p>Sweet menu</p>
        <p>
            <font size="1">お菓子</font>
        </p>
        <input type="button" value="追加" class="btn btn-primary" onclick="Addproduct()" />
        <hr color="#000000" size="1">
    </div>

    <!-- 飲み物メニュー -->
    <div class="drink">
        <p>Drink menu</p>
        <p>
            <font size="1">飲み物</font>
        </p>
        <input type="button" value="追加" class="btn btn-primary" onclick="Addproduct()" />
        <hr color="#000000" size="1">
    </div>
    <!-- End your code here -->
</body>

</html>
