function back(){
    window.location.href = "menu.php"; // ページ遷移
}

// 入力したレビュー情報のputReview.phpへの送信
const sendReview = () => {
  let sendReview_json = { contents: $('#sendReview-text').val() };
  let sending_string = JSON.stringify(sendReview_json);
  $.ajax({
    type: 'POST',
    url: 'http://localhost:8888/stub/putReview.php',
    datatype: 'json',
    data: sending_string
  }).done((res) => {
    if (JSON.parse(res).success) {
      location.href = "http://localhost:8888/compReview.php";
      window.location.href = "menu.php";
      // console.log("sending OK");
    } else {
      console.log("sending failed");
    }
  });
};
