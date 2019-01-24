<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!--internetExplorerのブラウザでバージョンによって崩れることがあるので、それを防ぐため互換表示をさせないために設定するmetaタグ-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--レスポンシブwebデザインに必要なmetaタグ-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/loginmanager.css?<?php echo date("YmdHis"); ?>" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>

</head>


<body>
<br>
<div class="container-fluid">
    <div class="row">
    <!--グリッドシステムではcol-lg(md,sm,xs)は12段階で画面を分割できる-->
        <div class="col-sm-2">
        <div class="d-flex">
        <div class="header-img"><img src="img/logo.svg" width = "140" ></div>
        </div>
        </div>

        <div class="col-sm-8"></div>
        <div align = "right" class="col-sm-2" style="margin-top:30px">
        <u><a href="home.php" style="font-size:30px;" >HOMEへ</a></u>
        </div> 
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">--> 
    </div>
    <br>

    <div class="row">
    <div align = "center" class="col-sm-12" style="background-color:#8EB8FF;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">管理者ログイン</font> </h2>
    </div>
    </div>

    <br><br><br>
    <form name="form1">
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  管理者ID：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="id" size="10" name="input01" maxlength="10" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>

    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> パスワード：</b>
        </div>
        <div class="col-sm-6">
        <input type="password" id="password" size="10" name="input02" maxlength="10" style="font-size:50px;">
        <input type="checkbox" id="password-check">
        </div>
        <div align = "left" class="col-sm-2">
        </div>
    </div>
    </form>

        <br><br>
        <div  class="row">
            <div align = "right" class="col-sm-7">
            <input type="button" class="login_btn" value="ログイン" onclick="loginManager_checkForm()">
            </div>
            <div class="col-sm-5">
            </div>
        </div>
</div>


<div id="result"></div>
<script type="text/javascript" src="js/login.js?<?php echo date("YmdHis"); ?>"></script>

   <!--パスワード表示用javascript-->
   <script>
    var pw = document.getElementById('password');
    var pwCheck = document.getElementById('password-check');
    pwCheck.addEventListener('change', function() {
    if(pwCheck.checked) {
        pw.setAttribute('type', 'text');
    } else {
        pw.setAttribute('type', 'password');
    }
    }, false);
    </script>

</body>
</html>
