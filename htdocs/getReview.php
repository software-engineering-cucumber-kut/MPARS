{
  "review": [
<?php
  require('database.php');
  // $review = database('SELECT', '* FROM review');
  // foreach($review as $val) {
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    // 評価の平均値を取得
    $target = ' AVG(evaluation) FROM review GROUP BY itemid';
    // echo $target . "\n";
    $evaluation_obj = database('SELECT', $target);
    // $evaluation_avg = intval($evaluation_obj[0]["AVG(evaluation)"]);
    //foreach($request as $val) {
    for ($i = 0; $i < count($evaluation_obj); $i++) {
      $evaluation_avg = intval($evaluation_obj[$i]["AVG(evaluation)"]);
      echo"\t\t{\n",
          //"\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
          "\t\t\t" . '"evaluation":' . $evaluation_avg . "\n";
    	/*"\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
      "\t\t\t" . '"contents":' . $val["contents"] . ",\n",
      "\t\t\t" . '"replyid":' . $val["replyid"] . ",\n",
      "\t\t\t" . '"evaluation":' . $evaluation_avg . ",\n",
      "\t\t\t" . '"datetime":' . $val["datetime"] . "\n";*/
      //最後まで行ったときの処理
      if ($val == end($evaluation_obj)) {
        print("\t\t}\n");
      } else {
        print("\t\t},\n");
      }
  }
?>
  ]
}
