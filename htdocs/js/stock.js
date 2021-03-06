let itemDiv = $("#items");
let template1 = '<div class="col-md-3"> <div class="card"> <img class="card-img-top" src="img/';
let template2 = '" alt="';
let template3 = '"> <div class="card-body"> <h4 class="card-title">';
let template4 = '</h4> <div class="card-text">';
let template5 = '<br> 現在の在庫：<span class="limit-number">';
let template6 = '</span><br/> 予約数：<span class="reserved">';
let template7 = '<br/> <br/> <form class=""> <div class="form-group"> <label>在庫数量</label> <input type="number" class="form-control stock-text" placeholder="在庫数を入力してください。"></input>';
let template8 = '</div> </form> </div> <div hidden class="itemid">';
let template9 = '</div> </div> </div>';

const addAvailableProduct = (msg) => {
    let availableProduct = JSON.parse(msg).products;
    $.each(availableProduct, (index, val) => {

        if (val.currentstock < 0) {
            return true;
        }

        let card = template1 + val.photo + template2 + val.name + template3;
        let title = val.name;
        let article = val.description;
        //article = desclist[1];
        //        console.dir(val);

        let itemid = val.id;

        card += title + template4 + "￥" + val.price + template5 + val.currentstock + template6 + val.reservedNumber + template7 + template8 + itemid + template9;
        //        console.log(card);

        itemDiv.append(card);
    });
};
$.ajax({
    type: 'GET',
    url: 'data/getAvailableProducts.php',
    datatype: 'json'
}).done((res) => {
    addAvailableProduct(res);
    /*setReserveEventOnClick();:*/
});
