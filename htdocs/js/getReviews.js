// JavaScript Document
$.ajax({
    url: '/data/getReview.php', 
    type: 'POST',
    data: '{"itemid": ' + sessionStorage["itemid"] + '}',
    datatype: 'json'
}).done((res) => {
    console.log(res);
    let reviews = JSON.parse(res).review;
    console.log(reviews);
    $.each(reviews, (index, review) => {
        let starrate = '';
        for (let i = 0; i < 5; i++) {
            if (i < review.evaluation) {
                starrate += '★';
            } else {
                starrate += '☆';
            }
        }
        let child = "<li class=\"list-group-item\">" + review.datetime.replace(/-/g, '/') + "<br/>" +
            '<div class="starrate">' + starrate + '</div>' +
            review.contents + "</li>\n";
        $('#review-list').append(child);
    });
});