{
  :success:<?php
  require('database.php');
  // タイムゾーン設定
  date_default_timezone_set('Asia/Tokyo');
  // 以降製作途中
  $calenderInfo = database('SELECT', 'store.color, businessday.businessday FROM store JOIN businessday ON store.id = businessday.storeid');
  foreach($calenderInfo as $val) {
    echo"\t\t{\n",
    "\t\t\t" . '"color":' . $val["color"] . ",\n",
    "\t\t\t" . '"businessday":' . $val["businessday"] . ",\n";
    if ($val == end($calenderInfo)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
  }
 ?>
}
