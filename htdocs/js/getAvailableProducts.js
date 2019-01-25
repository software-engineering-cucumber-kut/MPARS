let breadDiv = $("#breads");
let sweetsDiv = $("#sweets");
let drinkDiv = $("#drinks");
let template1 = '<div class="col-md-3"> <div class="card"> <img class="card-img-top" src="img/';
let template2 = '" alt="';
let template3 = '"> <div class="card-body"> <h4 class="card-title">';
let template4 = '</h4> <p class="card-text">';
let template5 = '</p> <br>';
let template6 = '</div> <div hidden class="itemid">';
let template7 = '</div> </div> </div>';

const addAvailableProduct = (msg) => {
	let availableProduct = JSON.parse(msg).products;
    $.each(availableProduct, (index, val) => {
		let card = template1 + val.photo + template2 + val.name + template3;
		let desclist = val.description.split("===");
		let title = desclist[0];
		//article = desclist[1];
//        console.dir(val);

        let itemid = val.id;

		card += title + template4 + template5 + "￥" + val.price + "<br>予約上限" + template6 + itemid + template7;
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
	url: 'http://localhost:80/stub/getAvailableProducts.php',
	datatype: 'json'
}).done(addAvailableProduct);

$('.row').on('click', '.card', (event) => {
    let currentT = event.currentTarget;
    let itemid = currentT.childNodes[5].innerText;
    sessionStorage.setItem('itemid', itemid);
});
