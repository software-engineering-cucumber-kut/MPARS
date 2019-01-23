// JavaScript Document

const sendReview = () => {
    let send_data = {};
    send_data.itemid = sessionStorage["itemid"];
    send_data.contents = $('#description').val();
    send_data.evaluation = $('#review-eval').val();
    $.ajax({
        url: 'data/putReview.php',
        type: 'POST',
        datatype: 'json',
        data: JSON.stringify(send_data)
    }).done((res) => {
        console.log(res);
        if (JSON.parse(res).success) {
            location.href = 'compReview.php';
        } else {
            alert('failed');
        }
    });
};