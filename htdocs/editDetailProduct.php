<?php
include('managerHeader.php');
?>
<link rel="stylesheet" type="text/css" href="css/menu.css">

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
        <div class="col-md-12">

            <form id="imgForm">
                <input type="file" name="image" id="select_photo" accept="image/*" onchange="previewFile()" required>
            </form>
            <br>
            <br>
            <!-- 画像ファイルの選択 -->
            <form method="post" name="info">
                <!-- 初期画像 -->
                <img id="photo" src="img/noimage.jpg" max-width="100">

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
                <textarea id="storename" placeholder="店名を入力してください。" maxlength="10" cols="50" rows="1" required></textarea>

                <br>
                <br>
                <input type="button" value="保存" class="btn btn-primary" onclick="sendProduct()" />
                <!--&emsp;<input type="button" value="削除" class="btn btn-primary" onclick="Deleteproduct()" />-->

            </form>
        </div>
    </div>

    <!-- End your code here -->
    <script type="text/javascript" src="js/sendImage.js"></script>
    <script type="text/javascript" src="js/a_sendProduct.js"></script>
    <script type="text/javascript" src="js/sendProduct.js"></script>
    <script type="text/javascript" src="js/getDetailProduct.js"></script>
    <script type="text/javascript">
        getDetailProduct();
    </script>
    <div id="b"></div>
<?php
include('managerFooter.php');
?>
