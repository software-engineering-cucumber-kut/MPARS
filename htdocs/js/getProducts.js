let breadDiv = $("#breads");
let sweetsDiv = $("#sweets");
let drinkDiv = $("#drinks");
let template1 = '<div class="col-md-3"> <a href="review.php"> <div class="card"> <img class="card-top-img img-fluid" src="img/';
let template2 = '" alt="';
let template3 = '"> <div class="card-body"> <h4 class="card-title">';
let template4 = '</h4> <p class="card-text">';
let template5 = '</p> <br> <div class="starrate">'
let template6 = '</div> </div> <div hidden class="itemid">';
let template7 = '</div> </div> </a> </div>';
const addItemInfoToPage = (msg) => {
	let items = JSON.parse(msg).menu;
    $.each(items, (index, val) => {
		let card = template1 + val.photo + template2 + val.name + template3;
		let desclist = val.description.split("===");
		let title = desclist[0];
		article = desclist[1];
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
	url: '/data/getProducts.php',
	datatype: 'json'
}).done(addItemInfoToPage);

$('.row').on('click', '.card', (event) => {
    let currentT = event.currentTarget;
    let itemid = currentT.childNodes[5].innerText;
    sessionStorage.setItem('itemid', itemid);
});
