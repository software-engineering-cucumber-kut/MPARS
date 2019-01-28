const getDetailProduct = () => {
    $.ajax({
        type: 'POST',
        url: 'data/getDetailProduct.php',
        datatype: 'json',
        data: '{"itemid":' + sessionStorage.getItem('itemid') + '}'
    }).done((res) => {
        //console.log(res);
        //console.log(JSON.parse(res));
        addDetailProduct(JSON.parse(res));
    });
};

const addDetailProduct = (data) => {
    console.log(data);
    // 各テキストボックスに追加する文字列
    var photo_src = "img/" + data.photo;
    var name = data.name;
    var price = data.price;
    var description = data.description;

    $('#photo').attr('src', photo_src);
    $('#name').val(name);
    $('#price').val(price);
    $('#description').val(description);
};
