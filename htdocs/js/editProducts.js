let itemDiv = $("#items");
let template1 = '<div class="col-md-3"> <div class="card"> <img class="card-top-img img-fluid" src="img/';
let template2 = '" alt="';
let template3 = '"> <div class="card-body"> <h4 class="card-title">';
let template4 = '</h4> <p class="card-text">';
let template5 = '</p> <br> <div class="starrate">'
let template6 = '</div> <br> <a href="editDetailProduct.php" class="btn btn-primary" onclick="Editproduct()">編集</a> </div> <div hidden class="itemid">';
let template7 = '</div> </div> </div>';
const addItemInfoToPage = (msg) => {
    //console.log(itemDiv);
	let items = JSON.parse(msg).menu;
    $.each(items, (index, val) => {
		let card = template1 + val.photo + template2 + val.name + template3;
		let title = val.name;
		let article = val.description;
//        console.dir(val);
        
        let itemid = val.id;

        // 評価を星に変換
        let starrate = "";
        for (let i = 0; i < 5; i++) {
            if (i > val.evaluation-1) {
                starrate += "☆";
            } else {
                starrate += "★";
            }
        }

		card += title + template4 + article + template5 + starrate + template6 + itemid + template7;
//        console.log(card);

        itemDiv.append(card);
	});
};
$.ajax({
	type: 'GET',
	url: 'data/getProducts.php',
	datatype: 'json'
}).done(addItemInfoToPage);

$('.row').on('click', '.card', (event) => {
    let currentT = event.currentTarget;
    let itemid = currentT.childNodes[5].innerText;
    sessionStorage.setItem('itemid', itemid);
});
