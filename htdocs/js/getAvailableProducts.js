let breadDiv = $("#breads");
let sweetsDiv = $("#sweets");
let drinkDiv = $("#drinks");
let template1 = '<div class="col-md-3"> <div class="card"> <img class="card-img-top" src="img/';
let template2 = '" alt="';
let template3 = '"> <div class="card-body"> <h4 class="card-title">';
let template4 = '</h4> <div class="card-text">';
let template5 = '<br> 残り：<span class="limit-number">';
let template6 = '</span> <br/> <br/> <form class=""> <div class="form-group"> <label>数量</label> <input type="number" name="number" class="form-control">';
let template7 = '</div> <button type="button" class="btn btn-primary reserve-btn"> 予約 </button> </form> </div> <div hidden class="itemid">';
let template8 = '</div> </div> </div>';

const addAvailableProduct = (msg) => {
    let availableProduct = JSON.parse(msg).products;
    $.each(availableProduct, (index, val) => {

        if (val.currentstock <= 0) {
            return true;
        }

        let card = template1 + val.photo + template2 + val.name + template3;
        let desclist = val.description.split("===");
        let title = desclist[0];
        //article = desclist[1];
        //        console.dir(val);

        let itemid = val.id;

        card += title + template4 + "￥" + val.price + template5 + val.currentstock + template6 + template7 + itemid + template8;
        //        console.log(card);

        switch (val.name) {
            case "bread":
                breadDiv.append(card);
                break;
            case "sweets":
                sweetsDiv.append(card);
                break;
            case "drink":
                drinkDiv.append(card);
                break;
            default:
                console.dir(val.name);
        }
    });
};
$.ajax({
    type: 'GET',
    url: 'data/getAvailableProducts.php',
    datatype: 'json'
}).done((res) => {
    addAvailableProduct(res);
    setReserveEventOnClick();
});

const setReserveEventOnClick = () => {
    $('.reserve-btn').on('click', (event) => {
        let currentT = event.currentTarget;
        // 現状のDOM構成に依存した実装．フォーム等から入力値，限界値，itemidを取得
        let numberValue = parseInt(currentT.previousElementSibling.lastChild.value);
        let limitValue = parseInt(currentT.parentElement.parentElement.children[1].innerText);
        let itemid = parseInt(currentT.parentElement.parentElement.parentElement.lastElementChild.innerText);
        //        console.log(numberValue);
        //        console.log(limitValue);
        //        console.log(itemid);

        if (numberValue > limitValue) {
            alert("予約上限を超えています");
        } else {
            // 追加する予約
            let newReservation = {
                itemid: itemid,
                amount: numberValue
            };

            let currentReservations = sessionStorage.getItem('reservations');
            // console.log(currentReservations);
            //console.log(!currentReservations || currentReservations === "null")
            if (!currentReservations || currentReservations === "null") {
                // currentReservationsionStorage初期化
                let initJson = {
                    products: [
                        newReservation
                    ]
                };
                sessionStorage.setItem('reservations', JSON.stringify(initJson));
                
            } else {
                currentReservations = JSON.parse(currentReservations);
                let exists = 0;
                $.each(currentReservations.products, (index, val) => {
                    if (val.itemid === newReservation.itemid) {
                        val.amount = newReservation.amount;
                        exists = 1;
                        return false;
                    }
                });
                if (!exists) {
                    currentReservations.products.push(newReservation);
                }
                
                sessionStorage.setItem('reservations', JSON.stringify(currentReservations));
            }

            // 移動
            location.href = 'checkReservation.php';
        }
        //    console.log(currentT);
        //    console.log(currentT.previousElementSibling.lastChild.value);
        //    console.log(currentT.parentElement.parentElement.children[1].innerText);
        //    let itemid = currentT.childNodes[5].innerText;
        //    sessionStorage.setItem('itemid', itemid);
    });
};
