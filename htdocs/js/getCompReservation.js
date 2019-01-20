// JavaScript Document
const getReservation = () => {
    $.ajax({
        type: 'POST',
        url: 'getCompReservation.php',
        datatype: 'json'
    }).done((res) => {
        // console.log(res);
        showReservation(JSON.parse(res));
    });
};

const showReservation = (data) => {
    let reserveProducts = data.reserveProducts;

    // イベント情報をホーム画面に追加
    $.each(reserveProducts, (index, val) => {
        // 追加する文字列
        var reservation = '<table border="2" width="700" align="center"><tr bgcolor="orange" align="center"><td>商品名</td><td>個数</td><td>値段</td></tr><tr bgcolor="white" align="center"><td>' + val.itemname + '</td><td>' + val.amount + '</td><td>' + val.price + '</td></tr></table><br>';

        $('#showReservation-body').append(reservation);
    });

};
