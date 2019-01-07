const sendRequest = () => {
    let request_json = { contents: $('#request-text').val() };
    let sending_string = JSON.stringify(request_json);
    
    $.ajax({
        type: 'GET',
        url: 'http://localhost:8888/putRequest.php',
        datatype: 'json'
    }).done((res) => {
        console.log(res);
    });
};
