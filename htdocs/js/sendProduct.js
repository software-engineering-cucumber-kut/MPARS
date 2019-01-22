const sendProduct = () => {
    // 写真のsrcを取得
    var photo_src = document.getElementById("photo").src;
    let product_json = {item1: photo_src,item2: $('#name').val(),item3: $('#price').val(),item4: $('#description').val()};
    let sending_string = JSON.stringify(product_json);
    $("#b").html(sending_string);


    // ajax通信
    $.ajax({
        type: 'POST',
        url: 'http://localhost/italy/bootstrap-4.1.3-dist/putProduct.php',
        datatype: 'json',
        data: sending_string
        
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "http://localhost/italy/bootstrap-4.1.3-dist/editProducts.php";
            
        } else {
            console.log("product sending failed");
        }
    });
};
