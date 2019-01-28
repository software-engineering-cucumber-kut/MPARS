const sendProduct = () => {
    // 写真のsrcを取得
    let imgName = sendImage($('#imgForm')).substr(7);
    console.log(imgName);
    let product_json = {photo: imgName, name:$('#name').val() , description: $('#description').val(), price: $('#price').val(), storename:$('#storename').val() };
    let sending_string = JSON.stringify(product_json);
    // $("#b").html(sending_string);


    console.log(sending_string);

    // ajax通信
    $.ajax({
        type: 'POST',
        url: 'data/putProduct.php',
        datatype: 'json',
        data: sending_string
        
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "editProducts.php";
            
        } else {
            console.log("product sending failed");
        }
    });
};
