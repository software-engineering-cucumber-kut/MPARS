// JavaScript Document
const sendReserveProducts = () => {
    $.ajax({
        url: 'data/putReservation.php',
        type: 'POST',
        datatype: 'json',
        data: sessionStorage.getItem('reservations')
    }).done((res) => {
        let sendResult = JSON.parse(res);
        if (!sendResult.success) {
            console.log('sending failed');
        } else {
            sessionStorage.clear();
            window.location.href = "managementReservation.php"; // ページ遷移
        }
    });
};