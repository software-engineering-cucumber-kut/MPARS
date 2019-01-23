$.ajax({
    url: 'data/getDetailProduct.php',
    type: 'POST',
    datatype: 'json',
    data: '{"itemid" : ' + sessionStorage["itemid"] + '}'
}).done((res) => {
    let res_json = JSON.parse(res);
    $('#review-item-card').prepend('<img src="img/' + res_json.photo + '" alt="item picture">');
    let item_name_and_description = res_json.description.split("===");
    $('#review-item-name').append(item_name_and_description[0]);
    $('#review-item-description').append(item_name_and_description[1]);
    $('#review-item-price').append('¥' + res_json.price);
});