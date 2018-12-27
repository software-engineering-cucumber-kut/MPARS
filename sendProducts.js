// 画像ファイルが選択されたとき
function previewFile() {
    // idがnoimageの要素の取得
    var preview = document.getElementById('photo');
    // 選択された画像ファイルの要素の取得
    // querySelectorでidやclassなどを意識せず要素を取得することができる.files[0]はfilesプロパティの最初の画像ファイルを取得.
    var file = document.querySelector('input[type=file]').files[0];
    // FileReaderオブジェクトを生成
    // FileReaderでFileオブジェクトが保有するバッファの中身に読み取りアクセスできる
    var reader = new FileReader();

    // 読み込み成功時に実行されるイベント
    reader.addEventListener("load", function () {
        // データの中身を取得し,previewオブジェクトのsrcに格納
        // FileReaderで利用可能なresultを使用して画像ファイル読み込み成功後、中身のデータが取得できる
        preview.src = reader.result;
    }, false);

    if (file) {
        // 指定されたFileオブジェクトの読み込み
        reader.readAsDataURL(file);
    }
}

// 保存ボタンを押したとき
function Saveproduct() {
    // 画像ファイルの取得
    var myimg = document.getElementById('photo');
    var photo = myimg.src;
    // 商品名の取得
    var name = document.getElementById("name").value;
    // 値段の取得
    var price = document.getElementById("price").value;
    // 商品説明文の取得
    var description = document.getElementById("description").value;

        // localstorageにJSON形式で保存する
        var datalist = {
            data1: photo,
            data2: name,
            data3: price,
            data4: description
        }
        localStorage.setItem('config', JSON.stringify(datalist));     
}

// localstorageに保存したデータをAjaxでPHPに送信する



/*<input type="file" name="photo" accept="image/*" required>
    <br>
    <br>>
    <!-- 初期画像 -->
<div style="width: 500px">
    <img src="noimage.jpg" width="100" height="100" id="noimage">
        </div>

<!-- サムネイル表示領域 -->
    <canvas id="canvas" width="0" height="0"></canvas>

<!-- javascript -->
<script type="text/javascript">
    $(function() {
    var file = null; // 選択されるファイル
    var blob = null; // 画像(BLOBデータ)
    const THUMBNAIL_WIDTH = 100; // 画像リサイズ後の横の長さの最大値
    const THUMBNAIL_HEIGHT = 100; // 画像リサイズ後の縦の長さの最大値

    // ファイルが選択されたら発動
    $('input[type=file]').change(function() {

        var a = document.getElementById("noimage");
        // idのnoimageが存在した場合
        if (a != null) {
            var noimage = document.getElementById("noimage");
            noimage.parentNode.removeChild(noimage);
        }

        //$(this)=$('input[type=file]')
        // prop()でfilesプロパティの取得.[0]は最初のファイル.[1]とすると2個目のファイル指定ができる.
        //選択したファイルを取得し変数に格納
        file = $(this).prop('files')[0];
        // 選択されたファイルが画像かどうか判定
        if (file.type != 'image/jpeg' && file.type != 'image/png') {
            // 画像でない場合は終了
            file = null;
            blob = null;
            return;
        }

        // 画像をリサイズする
        var image = new Image();
        var reader = new FileReader();
        reader.onload = function(e) {
            image.onload = function() {
            var width, height;
                            if (image.width > image.height) {
                                // 横長の画像は横のサイズを指定値にあわせる
                                var ratio = image.height / image.width;
                                width = THUMBNAIL_WIDTH;
                                height = THUMBNAIL_WIDTH * ratio;
                            } else {
                                // 縦長の画像は縦のサイズを指定値にあわせる
                                var ratio = image.width / image.height;
                                width = THUMBNAIL_HEIGHT * ratio;
                                height = THUMBNAIL_HEIGHT;
                            }
                            // サムネ描画用canvasのサイズを上で算出した値に変更
                            var canvas = $('#canvas')
                            .attr('width', width)
                            .attr('height', height);
                            var ctx = canvas[0].getContext('2d');

                            // canvasに既に描画されている画像をクリア
                            ctx.clearRect(0, 0, width, height);
                            // canvasにサムネイルを描画
                            ctx.drawImage(image, 0, 0, image.width, image.height, 0, 0, width, height);

                            // canvasからbase64画像データを取得
                            var base64 = canvas.get(0).toDataURL('image/jpeg');
                            // base64からBlobデータを作成
                            var barr, bin, i, len;
                            bin = atob(base64.split('base64,')[1]);
                            len = bin.length;
                            barr = new Uint8Array(len);
                            i = 0;
                            while (i < len) {
                                barr[i] = bin.charCodeAt(i);
                                i++;
                            }
                            blob = new Blob([barr], {
                                type: 'image/jpeg'
                            });
                            console.log(blob);
                        }
                        image.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                });

            });

        </script>*/
