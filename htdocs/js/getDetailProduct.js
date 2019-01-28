const getDetailProduct = () => {
    $.ajax({
        type: 'GET',
        url: 'http://localhost:80/stub/getDetailProduct.php',
        datatype: 'json'
    }).done((res) => {
        //        console.log(res);
        addDetailProduct(JSON.parse(res));
    });
};

const addDetailProduct = (data) => {
    let products = data.detailproduct;

    // 商品情報を商品編集画面に追加
    $.each(products, (index, val) => {
        // 各テキストボックスに追加する文字列
        //var photo_src = val.src;
        var name = val.name;
        var price = val.price;
        var description = val.description;

        //$('#photo').src(photo_src);
        $('#name').val(name);
        $('#price').val(price);
        $('#description').val(description);
    });
};
