<!DOCTYPE html>
<html lang ="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPARS</title>
  <!--jsとcssの読み込み-->
  <script type="text/javascript" src="js/reserveProducts.js"></script>
  <script type="text/javascript" src="js/getAvailableProducts.js"></script>
  <link rel="stylesheet" type="text/css" href="css/reserveProducts.css">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">
</head>

<body>
  <img src="img/logo.jpg" width="125" height="70" align="top">
  <div align="right"><button type="button" class="btn btn-primary" onclick="back1()">予約済商品</button>
  <button type="button" class="btn btn-primary" onclick="back2()">ログアウト</button></div>
  <div class="h1">
    <center>
      <font color="white">予約メニュー一覧</font>
    </center>
  </div>
  <br>

<div class="container-fluid">
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Bread</h4>
            <hr>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="noimage.jpg" alt="カードの画像">
        <div class="card-body">
            <h3 class="card-title" align="left">サンドイッチ</h3>
            <p class="card-text">具だくさんでボリュームがあります♪</p>
            <span style="float:right;">250</span><span style="float:right;">￥</span>
            <form>
              <table border="0" cellspacing="4" cellpadding="0">
                <tr>
                  <td>数量<select name="cnt">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select></td>
                  <td><button type="button" class="btn btn-primary" onclick="reserve()">予約</button></td>
                </tr>
              </table>
              <input type="hidden" name="goodsNo" value="1">
            </form>
        </div>
    </div>
    <br>
    <div class="row" id="breads">
    </div>
    <br>
    <div class="row text-left">
        <div class="col-md-12">
            <h4>Sweets</h4>
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
            <hr>
        </div>
    </div>
    <br>
    <div class="row" id="drinks">
    </div>
</div>
<script src="js/getAvailableProducts.js" type="text/javascript"></script>
  </body>
  </html>
