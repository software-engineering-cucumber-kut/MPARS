
// JavaScript Document
const getAllReservation = () => {
    $.ajax({
        type: 'GET',
        url:  'http://localhost:80/stub/getAllReservations.php',
        datatype: 'json'
    }).done((res) => {
//        console.log(res);
        addAllReservation(JSON.parse(res));
    });
};

const addAllReservation = (data) => {
    let reservations = data.reservation;

    // イベント情報をホーム画面に追加
    $.each(reservations, (index, val) => {
        // 追加する文字列
        var card = val.reservationtime +
            val.receiveday +
            val.amount +
            val.reservationid +
            "詳細情報";

        $('#AllReservations').append(card);
    });

};

// 表の動的作成
function makeTable(data, tableId){
    // 表の作成開始
    var rows=[];
    var table = document.createElement("table");

    // 表に2次元配列の要素を格納
    for(i = 0; i < data.length; i++){
        rows.push(table.insertRow(-1));  // 行の追加
        for(j = 0; j < data[0].length; j++){
            cell=rows[i].insertCell(-1);
            cell.appendChild(document.createTextNode(data[i][j]));
            // 背景色の設定
            if(i==0){
                cell.style.backgroundColor = "orange"; // ヘッダ行
            }else{
                cell.style.backgroundColor = "#ddd"; // ヘッダ行以外
            }
        }
    }
    // 指定したdiv要素に表を加える
    document.getElementById(tableId).appendChild(table);
}
window.onload = function(){
// 表のデータ
var data = [["予約日", "受取日時", "予約内容", "学籍番号またはID", "詳細情報"]];

// 表の動的作成
makeTable(data,"table");
};
