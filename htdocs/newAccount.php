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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- jQuery読み込み -->
    <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>


</head>
<body id="newAccount">
<br>
<div class="container-fluid" >
    <div class="row">
    <!--グリッドシステムではcol-lg(md,sm,xs)は12段階で画面を分割できる-->
    <!--ロゴの表示と『HOMEへ』ボタン-->
        <div class="col-sm-2" >
        <div class="d-flex">
        <div class="header-img"><img src="img/logo.svg" width = "140" ></div>
        </div>
        </div>

        <div class="col-sm-8"></div>
        <div align = "right" class="col-sm-2" style="margin-top:20px">
        <!--uタグは下線の追加  削除は→text-decoration:none;-->
        <u><a href="home.php" onClick="window.close();" style=" font-size:30px; ">HOMEへ</a></u>
        </div>
        
    </div>
    <br>

    <div class="row">
    <div align = "center" class="col-sm-12" style="background-color:#ff8b5f;">
    <h2> <font color="white" face="ＭＳ 明朝" style="font-size:50px;">新規作成</font> </h2>
    </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <a href="#student_link">
        <input type="button" class="student_btn" value="学生用" style="font-size:80px;">
        </a>
        </div>
        <div class="col-sm-2"></div>
        <div align = "left" class="col-sm-5">
        <a href="#general_link">  
        <input type="button" class="general_btn" value="一般用" style="font-size:80px;">
        </a>
        </div>
    </div>






<!--学生アカウント作成-->
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <div class = "row">
    <div align = "center" class="col-sm-10" id="student_link" style="color:white; font-size:50px;">_</div>
        <div align = "right" class="col-sm-2" style="margin-top:20px">
        <!--uタグは下線の追加  削除は→text-decoration:none;-->
        <u><a href="#newAccount" style=" font-size:30px; ">戻る</a></u>
        </div>
    </div>

    <div class = "row">
    <div align = "center" class="col-sm-12"  style="background-color:#ff8b5f; color:white; font-size:50px;">学生アカウント作成</div>
    </div>

    <form name="form1" > 
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  学生ID：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="sUserid" size="15" name="input01" maxlength="10" style="font-size:50px;" placeholder="学籍番号">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  氏名：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="sname" size="15" name="input02" maxlength="15" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  電話番号：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="sphonenumber" size="15" name="input03" maxlength="11" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> パスワード：</b>
        </div>
        <div class="col-sm-6">
        <input type="password" id="password" size="15" name="input04" maxlength="10" style="font-size:50px;">
        <input type="checkbox" id="password-check">
        </div>
        <div align = "left" class="col-sm-1">
        </div>
    </div>
    </form>

    <br><br><br>
    <div  class="row">
        <div align = "center" class="col-sm-12">
        <!-- 本番はこっち　onclick="newAccount()"-->
        <button type="button" id="addStudent_btn" style="font-size:30px;" onclick="student_checkForm()">学生用アカウント情報登録</button>
        
        <!--<input type="button" class="addGeneral_btn" name="student" value="学生用アカウント情報登録" style="font-size:30px;" onclick="student_newAccount()">-->
        </div>
    </div>

    <div id = "result"></div>







    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
<!--一般アカウント作成-->
    <div class = "row">
    <div align = "center" class="col-sm-10" id="general_link" style="color:white; font-size:50px;">_</div>
        <div align = "right" class="col-sm-2" style="margin-top:20px">
        <u><a href="#newAccount" style="font-size:30px;">戻る</a></u>
        </div>
    </div>

    <div class = "row">
    <div align = "center" class="col-sm-12"  style="background-color:#ff8b5f; color:white; font-size:50px;">一般用アカウント作成</div>
    </div>
     
    <br><br><br>
    <form name="form2">
    
    <div  class="row">
        <div align = "right" class="col-sm-5" id="name">
        <b style="font-size:50px;">  ユーザID(氏名)：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="dname" size="15" name="input01" maxlength="15" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  電話番号：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="phonenumber" size="15" name="input02" maxlength="11" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> パスワード：</b>
        </div>
        <div class="col-sm-6">
        <input type="password" id="password2" size="15"  name="input03" maxlength="10" style="font-size:50px;">
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
        <input type="text" id="address" size="15" name="input04" maxlength="30" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;"> 生年月日：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="birthday" size="15" name="input05" maxlength="15" style="font-size:50px;" placeholder="1997年3月25日">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br><br><br>
    <div  class="row">
        <div align = "right" class="col-sm-5">
        <b style="font-size:50px;">  メールアドレス：</b>
        </div>
        <div align = "left" class="col-sm-6">
        <input type="text" id="mail" size="15" name="input06" maxlength="45" style="font-size:50px;">
        </div>
        <div class="col-sm-1"></div>
    </div>
    </form>
   <br><br>
    <div  class="row">
        <div align = "center" class="col-sm-12">
           <!-- 本番はこっち　onclick="newAccount()"-->
           <button type="button" id="addGeneral_btn" style="font-size:30px;" onclick="general_checkForm()">一般用アカウント情報登録</button>
        <!--<input type="button" class="addGeneral_btn" name ="general" value="一般用アカウント情報登録" style="font-size:30px;" onclick="general_newAccount()">-->
        </div>
    </div>
    <br><br>
</div>
<div id = "sresult"></div>
<br>

<script type="text/javascript" src="js/newAccount.js?1"></script>

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