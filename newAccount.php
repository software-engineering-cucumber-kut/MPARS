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
    <link href="loginCustomer.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    <script src="newAccount.js"></script>

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
        <div class="col-sm-2"></div> 
        <!--<input type="button" class="managehome_btn" value="管理者ホームへ" style="font-size:30px; color:blue;" id="button1">--> 
    </div>
    <br>

    <div class="row">
    <div align = "center" class="col-sm-12" style="background-color:#ff8b5f;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">新規作成</font> </h2>
    </div>
    </div>

    <br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <a href="#student_link">
        <input type="button" class="student_btn" value="学生用" style="font-size:50px;">
        </a>
        </div>
        <div class="col-sm-2"></div>
        <div align = "left" class="col-sm-5">
        <a href="#general_link">  
        <input type="button" class="general_btn" value="一般用" style="font-size:50px;">
        </a>
        </div>
    </div>

<!--学生アカウント作成-->
    <br><br><br>
    <div class = "row">
    <div align = "center" class="col-sm-12" id="student_link" style="background-color:#ff8b5f; color:white; font-size:50px;">学生アカウント作成</div>
    </div>

    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  学生ID(学籍番号)：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="sUserid" size="15" maxlength="10" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  氏名：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="sname" size="15" maxlength="15" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  電話番号：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="sphonenumber" size="15" maxlength="11" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> パスワード：</b>
        </div>
        <div class="col-sm-6">
        <input type="password" id="password" size="15" maxlength="10" style="font-size:50px;">
        <input type="checkbox" id="password-check">
        </div>
        <div align = "left" class="col-sm-1">
        </div>
    </div>

    <br><br>
    <div  class="row">
        <div align = "center" class="col-sm-12">
        <!-- 本番はこっち　onclick="newAccount()"-->
        <input type="button" class="addGeneral_btn" name="student" value="学生用アカウント情報登録" style="font-size:30px;" onclick="location.href='./loginCustomer.php'">
        </div>
    </div>

    <br><br><br><br>
<!--一般アカウント作成-->
    <br><br>
    <div class = "row">
    <div align = "center" class="col-sm-12" id="general_link" style="background-color:#ff8b5f; color:white; font-size:50px;">一般用アカウント作成</div>
    </div>
     
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  ユーザID：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="Userid" size="15" maxlength="10" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5" id="name">
        <b style="font-size:50px;">  氏名：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="name" size="15" maxlength="15" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  電話番号：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="phonenumber" size="15" maxlength="11" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> パスワード：</b>
        </div>
        <div class="col-sm-6">
        <input type="password" id="password2" size="15" maxlength="10" style="font-size:50px;">
        <input type="checkbox" id="password-check2">
        </div>
        <div align = "left" class="col-sm-1">
        </div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  住所：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="address" size="15" maxlength="30" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> 生年月日：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="birthday" size="15" maxlength="15" style="font-size:50px;" placeholder="1997年3月25日">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  メールアドレス：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="mail" size="15" maxlength="45" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>

   <br><br>
    <div  class="row">
        <div align = "center" class="col-sm-12">
           <!-- 本番はこっち　onclick="newAccount()"-->
        <input type="button" class="addGeneral_btn" name ="general" value="一般用アカウント情報登録" style="font-size:30px;" onclick="location.href='./loginCustomer.php'">
        </div>
    </div>

</div>

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

    var pv = document.getElementById('password2');
    var pvCheck = document.getElementById('password-check2');
    pvCheck.addEventListener('change', function() {
    if(pvCheck.checked) {
        pv.setAttribute('type', 'text');
    } else {
        pv.setAttribute('type', 'password');
    }
    }, false);
    </script>
</body>
</html>