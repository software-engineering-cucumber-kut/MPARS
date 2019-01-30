const sendRequest = () => {
    let send_data = {};
    send_data.contents = $('#request-text').val();
    $.ajax({
        url: 'data/putRequest.php',
        type: 'POST',
        datatype: 'json',
        data: JSON.stringify(send_data)
    }).done((res) => {
        if (JSON.parse(res).success) {
            location.href = "/compRequest.php";
        } else {
            console.log("request sending failed");
        }
    });
};
