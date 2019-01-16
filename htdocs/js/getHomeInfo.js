// JavaScript Document
const getHomeInfo = () => {
    $.ajax({
        type: 'GET',
        url: '/stub/getHomeInfo.php',
        datatype: 'json'
    }).done((res) => {
//        console.log(res);
        addHomeInfo(JSON.parse(res));
    });
};

const addHomeInfo = (data) => {
    let events = data.event;
    let shopinfos = data.shopinfo;
    
    // イベント情報をホーム画面に追加
    $.each(events, (index, val) => {
        // 追加する文字列
        var card = '<div class="card"><div class="card-header">臨時' +
            (val.isopen ? '開' : '閉') +
            '店のお知らせ </div> <ul class ="list-group list-group-flush"><li class="list-group-item"><strong>NAME : </strong>' +
            val.storename +
            '</li> <li class="list-group-item"><strong>DATE : </strong>' +
            val.date +
            '</li> <li class="list-group-item"><strong>HOURS : </strong>' +
            val.open.match(/..:../) + '-' + val.close.match(/..:../) +
            '</li></ul></div><br/>';
        
        $('#event-info-body').append(card);
    });
    
    $.each(shopinfos, (index, val) => {
        var card = '<div class="card"> <div class="card-header">' +
            val.name +
            '</div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>ADDRESS : </strong>' + 
            val.address +
            '</li><li class="list-group-item"><strong>PHONE : </strong>' +
            val.phonenumber +
            '</li><li class="list-group-item"><strong>BUSINESS DAY : </strong>' +
            val.businessday + ' ' + val.open.match(/..:../) + '-' + val.close.match(/..:../) +
            '</li></ul></div><br/>';
        $('#contact-info-body').append(card);
    });
};
