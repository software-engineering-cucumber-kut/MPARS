const back = () => {
    window.location.href = "managementReservation.php"; // ページ遷移
}

const deleteReservation = () => {
    $.ajax({
        url: 'data/deleteReservation.php',
        type: 'GET'
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = 'compDeleteReservation.php';
        } else {
            alert("まだ商品が予約されていません");
            //alert('deletion failed');    
        }
    });
}
