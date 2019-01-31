const sendStock = () => {
    let stocks = $('.stock-text');
    let itemids = stocks.parents('.card-body').find('.itemid');
    let send_data = {
        stock:[]
    };
    $.each(stocks, (index, stock) => {
        if (stock.value != "") {
            send_data.stock.push({
                itemid: itemids[index].innerText,
                currentstock: stock.value,
                nextstock: stock.value
            });
        }
    });
    console.log(send_data);
    $.ajax({
        url: 'data/putStock.php',
        type: 'POST',
        datatype: 'json',
        data: JSON.stringify(send_data)
    }).done((res) => {
        console.log(res);
        /*
        if (JSON.parse(res).success) {
            location.href = "/stock.php";
        } else {
            console.log("request sending failed");
        }
        */
    });
};
