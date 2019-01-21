const sendEditHome = () => {
  let editHome_json = { contents: $('#editHome-text').val() };
  let sending_string = JSON.stringify(editHome_json);
  $.ajax({
    type: 'POST',
    url: 'http://localhost:8888/stub/putHomeInfo.php',
    datatype: 'json',
    data: sending_string
  }).done((res) => {
    if (JSON.parse(res).success) {
      location.href = "http://localhost:8888/editHome.php";
      // console.log("sending OK");
    } else {
      console.log("sending failed");
    }
  });
};
