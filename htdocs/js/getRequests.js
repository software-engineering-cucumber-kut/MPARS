// JavaScript Document
const getRequests = () => {
    $.ajax({
        type: 'POST',
        url: 'getRequest.php',
        datatype: 'json'
    }).done((res) => {
        // console.log(res);
        addRequests(JSON.parse(res));
    });
};

const addRequests = (data) => {
    let request = data.request;
    // イベント情報をホーム画面に追加
    $.each(request, (index, val) => {
        // 追加する文字列
        var request = '<div class="request"><div class="request-header">' + val.datetime + '</div>' + val.contents + '</div><br/>';

        $('#requests-body').append(request);
    });

};
