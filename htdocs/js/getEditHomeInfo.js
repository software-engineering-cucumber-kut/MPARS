// JavaScript Document
const getEditHomeInfo = () => {
    $.ajax({
        type: 'GET',
        url: '/data/getHomeInfo.php',
        datatype: 'json'
    }).done((res) => {
//        console.log(res);
        addEditHomeInfo(JSON.parse(res));
    });
};

const addEditHomeInfo = (data) => {
    let events = data.event;
    let shopinfos = data.shopinfo;
    $.each(events, (index, val) => {
      var eventCard = '<hidden id="event-id">' + val.id + '</hidden><br>店名<input id="edit-name"  type="text" name="name-event-info-textarea" size="20" maxlength="10" value="' + val.storename + '"></input><br>日付<input id="edit-date" type="date" name="event-calendar" max="9999-12-31" value="' + val.date + '"><br>時間' + selectHours(val.open) + selectMinutes(val.open) + '-' + selectHours(val.close) + selectMinutes(val.close) + '<br><br>';
      $('#event-info-body').append(eventCard);
    });
    $.each(shopinfos, (index, val) => {
      var shopInfoCard = '店名<input id="shop-name" type="text" name="name-contact-textarea" size="20" maxlength="10" value="' + val.name + '"></input><br>住所<input id="shop-address" type="text" name="adress-contact-textarea" size="60" maxlength="30" value="' + val.address + '"></input><br>電話番号<input id="shop-phonenumber" type="text" name="phone-contact-textarea" size="22" maxlength="11" value="' + val.phonenumber + '"></input><br>営業曜日<input id="shop-businessday" type="text" name="day-contact-textarea" size="14" maxlength="7" value="' + val.businessday + '"></input><br>営業時間<a id="edit-open-hour">' + selectHours(val.open) + '</a><a id="edit-open-minute">' + selectMinutes(val.open) + '</a>-<a id="edit-close-hour">' + selectHours(val.close) + '</a><a id="edit-close-minute">' + selectMinutes(val.close) + '</a><br><br>';
      $('#contact-info-body').append(shopInfoCard);
    });
};

const selectHours = (data) => {
  data = data.slice(0,-6);
  var hours = new Array();
  var selectHour = 24;
  var selectOption = '<select name="startTime-hours-event">';
  for (var i =0; i < selectHour; i++) {
    if (i == data) {
      selectOption = selectOption + '<option value="' + data + '" selected>' + i + '</option>';
    } else {
      hours[i] = i;
      selectOption = selectOption + '<option value="' + hours[i] + '">' + hours[i] + '</option>';
    }
  }
  selectOption = selectOption + '</select>時';
  return selectOption;
}

const selectMinutes = (data) => {
  data = data.slice(3);
  data = data.slice(0,-3);
  var minutes = new Array();
  var selectMinute = 60;
  var selectOption = '<select name="startTime-minutes-event">';
  for (var i = 0; i < selectMinute; i++) {
    if (i == data) {
      selectOption = selectOption + '<option value="' + data + '" selected>' + i + '</option>';
    } else {
      minutes[i] = i;
      selectOption = selectOption + '<option value="' + minutes[i] + '">' + minutes[i] + '</option>';
    }
  }
  selectOption = selectOption + '</select>分';
  return selectOption;
}
/*
function previewFile1() {
    // idがnoimageの要素の取得
    var preview1 = document.getElementById('photo1');
    // 選択された画像ファイルの要素の取得
    // querySelectorでidやclassなどを意識せず要素を取得することができる.files[0]はfilesプロパティの最初の画像ファイルを取得.
    var file1 = document.querySelector('input[type=file]').files[0];
    // FileReaderオブジェクトを生成
    // FileReaderでFileオブジェクトが保有するバッファの中身に読み取りアクセスできる
    var reader1 = new FileReader();

    // 読み込み成功時に実行されるイベント
    reader1.addEventListener("load", function () {
        // データの中身を取得し,previewオブジェクトのsrcに格納
        // FileReaderで利用可能なresultを使用して画像ファイル読み込み成功後、中身のデータが取得できる
        preview1.src = reader1.result;
    }, false);

    if (file1) {
        // 指定されたFileオブジェクトの読み込み
        reader1.readAsDataURL(file1);
    }
}

function previewFile2() {
    // idがnoimageの要素の取得
    var preview2 = document.getElementById('photo2');
    // 選択された画像ファイルの要素の取得
    // querySelectorでidやclassなどを意識せず要素を取得することができる.files[0]はfilesプロパティの最初の画像ファイルを取得.
    var file2 = document.querySelector('input[type=file]').files[1];
    // FileReaderオブジェクトを生成
    // FileReaderでFileオブジェクトが保有するバッファの中身に読み取りアクセスできる
    var reader2 = new FileReader();

    // 読み込み成功時に実行されるイベント
    reader2.addEventListener("load", function () {
        // データの中身を取得し,previewオブジェクトのsrcに格納
        // FileReaderで利用可能なresultを使用して画像ファイル読み込み成功後、中身のデータが取得できる
        preview2.src = reader2.result;
    }, false);

    if (file2) {
        // 指定されたFileオブジェクトの読み込み
        reader2.readAsDataURL(file2);
    }
}
*/
