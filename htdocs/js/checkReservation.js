function back1() {
    window.location.href = "managementReservation.php"; // ページ遷移
}

function back2() {
    window.location.href = "logout.php"; // ページ遷移
}

function back4() {
    window.location.href = "reserveProducts.php"; // ページ遷移
}

const addReservationToTable = () => {
    if (sessionStorage.getItem('reservations') === null)
        return;

    let reservations = JSON.parse(sessionStorage.getItem('reservations')).products;
    //    console.log(reservations)
    $.each(reservations, (index, val) => {
        
        //        console.log(val);
        $.ajax({
            url: 'data/getDetailProduct.php',
            data: '{"itemid":' + val.itemid + '}',
            datatype: 'json',
            type: 'POST'
        }).done((res) => {
            
            let itemName = '';
            let price = 0;
//            console.log(res)
            let responce = JSON.parse(res);
            itemName += responce.description.split("===")[0];
            price += responce.price;

//            console.log(itemName)
            // 新規行追加
            let newRow = '<tr>' +
                '<td>' + itemName + '</td>' +
                '<td>' + val.amount + '個</td>' +
                '<td>' + price + '円</td>';
//            console.log(newRow);
            $('#reservationProductsTable').append(newRow);
        });
    });
};

addReservationToTable();
