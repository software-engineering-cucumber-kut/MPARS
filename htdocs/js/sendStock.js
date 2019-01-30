const sendStock = () => {
    let send_data = {};
    send_data.contents = $('#stock-text').val();
    $.ajax({
        url: 'data/putStock.php',
        type: 'POST',
        datatype: 'json',
        data: JSON.stringify(send_data)
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "/stock.php";
        } else {
            console.log("request sending failed");
        }
    });
};
