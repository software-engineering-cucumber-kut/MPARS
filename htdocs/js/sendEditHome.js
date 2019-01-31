const sendEditHome = () => {

  let edit_open = $('#edit-open-hour').val() + ":" + $('#edit-open-minute').val() + ":00";
  let edit_close = $('#edit-close-hour').val() + ":" + $('#edit-close-minute').val() + ":00";

  let shopData = 'name:' . $('#shop-name').val() . ',phonenumber:' . $('#shop-phonenumber').val() . ',address:' . $('#shop-address').val();

  let eventData = 'isopen:' . $('#edit-open').val() . ',date:' . $('#edit-date').val() . ',' . edit_open . ',' . edit_close;
  }

  let editHome_json = {shopInfos[],eventInfos[]};

  editHome_json.shopInfos.push({$.each(shopData)});
  editHome_json.eventInfos.push({$.each(eventData)});
  
  /*shopInfo.name = $('#edit-name').val();
  shopInfo.phonenumber = $('#edit-phonenumber').val();
  shopInfo.address = $('#edit-address').val();

  eventInfo.id = $('#event-id').val();
  eventInfo.isopen = NULL;
  eventInfo.date = $('#edit-date').val();
  eventInfo.open = edit_open;
  eventInfo.close = edit_close;

  send_data.shopinfo = shopInfo;
  send_data.eventinfo = eventInfo;*/

  $.ajax({
    type: 'POST',
    url: 'http://localhost/data/putHomeInfo.php',
    datatype: 'json',
    data: JSON.stringify(editHome_json)
  }).done((res) => {
    if (JSON.parse(res).success) {
      location.href = "http://localhost/editHome.php";
      // console.log("sending OK");
    } else {
      alert("sending failed");
    }
  });
};
