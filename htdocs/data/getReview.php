{
  "review": [
<?php
  require('database.php');
  // $review = database('SELECT', '* FROM review');
  // foreach($review as $val) {
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    $target = ' * FROM review WHERE itemid = ' . strval($json_obj->itemid) . '  ORDER BY id DESC';
    $reviews = database('SELECT', $target);

    for ($i = 0; $i < count($reviews); $i++) {
      echo"\t\t{\n",
          //"\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
          "\t\t\t" . '"evaluation":' . $reviews[$i]["evaluation"] . ",\n" .
          "\t\t\t" . '"contents":"' . $reviews[$i]["contents"] . "\",\n" .
          "\t\t\t" . '"datetime":"' . $reviews[$i]["datetime"] . "\"\n";
    	/*"\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
      "\t\t\t" . '"replyid":' . $val["replyid"] . ",\n",
      "\t\t\t" . '"evaluation":' . $evaluation_avg . ",\n",
      "\t\t\t" . '"datetime":' . $val["datetime"] . "\n";*/
      //最後まで行ったときの処理
      if ($i >= count($reviews)-1) {
        print("\t\t}\n");
      } else {
        print("\t\t},\n");
      }
  }
?>
  ]
}
