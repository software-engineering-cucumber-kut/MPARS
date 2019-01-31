    <!-- Start your code here -->

    <!-- header.phpを読み込む -->
    <?php
    require( 'header.php' );
    ?>
<script type="text/javascript" src="js/a_getReviews.js"></script>
<script type="text/javascript" src="js/compReview.js"></script>
<link rel="stylesheet" type="text/css" href="css/review.css">


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h4>Evaluation&amp;Review</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <!-- メニュー画面で選択した商品の表示 -->
            <div class="card" style="width: 100%;" id="review-item-card">
                <div class="card-body">
                    <h4 class="card-title" id="review-item-name"></h4>
                    <div class="card-text">
                        <div id="review-item-description">
                        </div>
                        <div id="review-item-price">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- レビューの投稿フォーム -->
        <div class="col-md-7">
            <p style="font-size:20px;">ここでは、選択した商品に対してのレビューが投稿できます。</p>
            <form name="targetForm">
                <div>
                    <td><b style="font-size:20px;">この商品に対しての評価は</b>
                        <select name="elt" id="review-eval">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><b style="font-size:20px;">点</b>
                    </td>
                    <br>
                    <br>
                    <textarea id="description" placeholder="テキストを入力して下さい。(500文字以内)" required></textarea>
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialog1"/> 投稿
                    </button>
                    <button type="button" class="btn btn-primary" onclick="cp()"/> コピーする
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialog2"/> レビューをSNSに共有
                    </button>
                </div>
            </form>
        </div>


        <!-- ダイアログの骨組み -->
        <div id="dialog1" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">確認画面</h4>
                        <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    

                    </div>
                    <div class="modal-body">
                        <p>この内容でレビューを投稿しますか?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onClick="sendReview()">はい</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">いいえ</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="dialog2" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">選択画面</h4>
                        <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    

                    </div>
                    <div class="modal-body">
                        どのSNSに共有しますか?
                    </div>
                    <div class="modal-footer">

                        <a href="https://twitter.com/?lang=ja" target="_blank"><img src="/img/Twitter%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3.jpg" alt="twitter" height="100" width="100"></a>
                        <!-- target="_blank" 新規タブで開く-->
                        <a href="https://ja-jp.facebook.com/" target="_blank"><img src="/img/facebook.jpg" alt="facebook" height="90" width="90"></a>
                        <a href="https://line.me/ja/" target="_blank"><img src="/img/LINE.jpg" alt="LINE" height="100" width="100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <!-- レビューリスト -->
    <div class="row">
        <div class="col-md-12">
            <h4>Review&nbsp;list</h4>
            <hr>
            <p>レビューのリスト</p>

            <ul class="list-group" id="review-list">
            </ul>
        </div>
    </div>


    <!--<a href="review.php"><img src="food_sandwitch.jpg"></a>-->

</div>
<script type="text/javascript" src="js/getReviews.js"></script>
<script type="text/javascript" src="js/review.js"></script>
    <!-- End your code here -->
    <?php
    require( 'footer.php' );
    ?>
