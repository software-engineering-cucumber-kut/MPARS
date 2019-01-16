<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPARS</title>
    <script type="text/javascript" src="getReviews.js"></script>
    <link rel="stylesheet" type="text/css" href="menu.css">
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery UIの読み込み -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">
</head>

<body>
    <!-- Start your code here -->

    <!-- header.phpを読み込む -->


    <table>
        <tr>
            <td>Evaluation&Review</td>
            <td width="100%">
                <hr color="#000000" size="1">
            </td>
    </table>
    <br>
    <!-- メニュー画面で選択した商品の表示 -->
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="noimage.jpg" alt="カードの画像">
        <div class="card-body">
            <h5 class="card-title">商品名</h5>
            <p class="card-text">以下のテキストを追加のコンテンツへの自然な導入としてサポート。 カードのコンテンツ カードのコンテンツ</p>
        </div>
    </div>

    <!-- レビューの投稿フォーム -->
    <p style="font-size:20px;">ここでは、選択した商品に対してのレビューが投稿できます。</p>
    <form name="targetForm">
        <div>
            <td><b style="font-size:20px;">この商品に対しての評価は</b><select name="elt">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select><b style="font-size:20px;">点</b></td>
            <br>
            <br>
            <textarea id="description" placeholder="テキストを入力して下さい。(500文字以内)" maxlength="500" cols="50" rows="4" required></textarea>
            <br>
            <input type="button" value="投稿" class="btn btn-primary" id="ctb" />
            <input type="button" value="コピーする" class="btn btn-primary" onclick="cp()" />
            <input type="button" value="レビューをSNSに共有" class="btn btn-primary" id="share" />
        </div>
    </form>

    <!-- 投稿ボタンが押された時ダイアログを表示させる -->
    <script type="text/javascript">
        $(function() {
            $("#ctb").click(function() {
                $("#dialog1").dialog({
                    modal: true,
                    title: "確認画面",
                    buttons: {
                        "はい": function() {
                            $(this).dialog("close");
                            window.location.href = "compReview.php";
                        },
                        "いいえ": function() {
                            $(this).dialog("close");
                        }
                    }
                });
            });
        });

    </script>

    <!-- レビューをSNSに共有ボタンが押された時ダイアログを表示させる -->
    <script type="text/javascript">
        $(function() {
            $("#share").click(function() {
                $("#dialog2").dialog({
                    modal: true,
                    title: "選択画面"
                });
            });
        });

    </script>


    <!-- ダイアログの骨組み -->
    <div id="dialog1" style="display:none;">
        <p>この内容でレビューを投稿しますか?</p>
    </div>

    <div id="dialog2" style="display:none;">
        <p>どのSNSに共有しますか?</p>
        <a href="https://twitter.com/?lang=ja" target="_blank"><img src="Twitter%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3.jpg" alt="twitter" height="100" width="100"></a><!-- target="_blank" 新規タブで開く-->
        <a href="https://ja-jp.facebook.com/" target="_blank"><img src="facebook.jpg" alt="facebook" height="90" width="90"></a>
        <a href="https://line.me/ja/" target="_blank"><img src="LINE.jpg" alt="LINE" height="100" width="100"></a>
    </div>

    <!-- レビューリスト -->
    <table>
        <tr>
            <td>Review&nbsp;list</td>
            <td width="100%">
                <hr color="#000000" size="1">
            </td>
    </table>
    <br>
    <p>レビューのリスト</p>


    <!--<a href="review.php"><img src="food_sandwitch.jpg"></a>-->



    <!-- End your code here -->
</body>

</html>
