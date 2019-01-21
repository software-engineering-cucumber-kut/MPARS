<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!--internetExplorerのブラウザでバージョンによって崩れることがあるので、それを防ぐため互換表示をさせないために設定するmetaタグ-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--レスポンシブwebデザインに必要なmetaタグ-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!--BootstrapのJavascriptよりも先にJQueryを読み込むようにしないとBootstrapのjavascriptがうまく動作しない-->
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="manager.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container-fluid">
    <div class="row">
    <!--グリッドシステムではcol-lg(md,sm,xs)は12段階で画面を分割できる-->
        <div class="col-sm-2">
        <div class="d-flex">
        <div class="header-img"><img src="logo.jpg" width = "140" ></div>
        </div>
        </div>

        <div class="col-sm-8"></div>
        <div align = "right" class="col-sm-2">
        <u><a href="home.php" style="font-size:30px;">ログアウト</a></u>
        </div> 
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">--> 
    </div>
    <br>

    <div class="row">
    <div align = "center" class="col-sm-12" style="background-color:#8EB8FF;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">管理者ホーム</font> </h2>
    </div>
    </div>

    <br><br><br><br>
    <div  class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5 ,size"> 
        <a href="#" class="square_btn" onclick="location.href='./allReservations.php'" >予約一覧</a>    
        </div>
        <div class="col-sm-5"></div>
    </div>

    <br>
    <div  class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-5">
        <a href="#" class="square_btn" onclick="location.href='./stock.php'">在庫編集</a>  
        </div>
        <div class="col-sm-1"></div>
    </div>

    <br>
    <div  class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5"> 
        <a href="#" class="square_btn" onclick="location.href='./editProducts.php'">メニュー編集</a>    
        </div>
        <div class="col-sm-5"></div>
    </div>

    <br>
    <div  class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-5">
        <a href="#" class="square_btn" onclick="location.href='./showRequests.php'">リクエスト一覧</a>  
        </div>
        <div class="col-sm-1"></div>
    </div>

    <br>
    <div  class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5"> 
        <a href="#" class="square_btn" onclick="location.href='./editHome.php'">店舗情報編集</a>    
        </div>
        <div class="col-sm-5"></div>
    </div>

</div>
</body>
</html>
