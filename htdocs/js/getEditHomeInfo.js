// JavaScript Document
const getEditHomeInfo = () => {
    $.ajax({
        type: 'GET',
        url: '/data/getHomeInfo.php',
        datatype: 'json'
    }).done((res) => {
//        console.log(res);
        addEditHomeInfo(JSON.parse(res));
    });
};

const addEditHomeInfo = (data) => {
    let events = data.event;
    let shopinfos = data.shopinfo;
    $.each(events, (index, val) => {
      var eventCard = '店名<input type="text" name="name-event-info-textarea" size="20" maxlength="10" value="' + val.storename + '"></input><br>日付<input type="date" name="event-calendar" max="9999-12-31" value="' + val.date + '"><br>時間' + selectHours(val.open) + selectMinutes(val.open) + '-' + selectHours(val.close) + selectMinutes(val.close) + '<br><br>';
      $('#event-info-body').append(eventCard);
    });
    $.each(shopinfos, (index, val) => {
      var shopInfoCard = '店名<input type="text" name="name-contact-textarea" size="20" maxlength="10" value="' + val.name + '"></input><br>住所<input type="text" name="adress-contact-textarea" size="60" maxlength="30" value="' + val.address + '"></input><br>電話番号<input type="text" name="phone-contact-textarea" size="22" maxlength="11" value="' + val.phonenumber + '"></input><br>営業曜日<input type="text" name="day-contact-textarea" size="14" maxlength="7" value="' + val.businessday + '"></input><br>営業時間' + selectHours(val.open) + selectMinutes(val.open) + '-' + selectHours(val.close) + selectMinutes(val.close) + '<br><br>';
      $('#contact-info-body').append(shopInfoCard);
    });
};

const selectHours = (data) => {
  data = data.slice(0,-6);
  var hours = new Array();
  var selectHour = 24;
  var selectOption = '<select name="startTime-hours-event"><option value="' + data + '" selected>' + data + '</option>';
  for (var i =0; i < selectHour; i++) {
    if (i == data) continue;
    hours[i] = i;
    selectOption = selectOption + '<option value="' + hours[i] + '">' + hours[i] + '</option>';
  }
  selectOption = selectOption + '</select>時';
  return selectOption;
}

const selectMinutes = (data) => {
  data = data.slice(3);
  data = data.slice(0,-3);
  var minutes = new Array();
  var selectMinute = 60;
  var selectOption = '<select name="startTime-minutes-event"><option value="' + data + '" selected>' + data + '</option>';
  for (var i = 0; i < selectMinute; i++) {
    if (i == data) continue;
    minutes[i] = i;
    selectOption = selectOption + '<option value="' + minutes[i] + '">' + minutes[i] + '</option>';
  }
  selectOption = selectOption + '</select>分';
  return selectOption;
}
