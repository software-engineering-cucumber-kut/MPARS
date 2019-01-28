$.ajax({
    url: 'data/getDetailProduct.php',
    type: 'POST',
    datatype: 'json',
    data: '{"itemid" : ' + sessionStorage["itemid"] + '}'
}).done((res) => {
    let res_json = JSON.parse(res);
    $('#review-item-card').prepend('<img class="card-top-img" src="img/' + res_json.photo + '" alt="item picture">');
    let item_name = res_json.name;
    let item_description = res_json.description;
    $('#review-item-name').append(item_name);
    $('#review-item-description').append(item_description);
    $('#review-item-price').append('¥' + res_json.price);
});
