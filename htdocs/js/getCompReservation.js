// JavaScript Document
const getReservation = () => {
    $.ajax({
        type: 'POST',
        url: 'data/getCompReservation.php',
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
        var reservation = '<tr bgcolor="white" align="center"><td>' + val.itemname + '</td><td>' + val.amount + '</td><td>' + val.price + '</td></tr>';

        $('#showReservation-body').append(reservation);
    });

};
