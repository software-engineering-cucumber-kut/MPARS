// 画像ファイルが選択されたとき選択した画像の表示  
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

// 保存ボタンを押したとき入力したデータの保存
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


// 削除ボタンを押したとき選択した商品情報の削除
function Deleteproduct() {
    
}

