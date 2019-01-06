{
  :success:<?php
  require('database.php');
  // タイムゾーン設定
  date_default_timezone_set('Asia/Tokyo');
  // 以降製作途中
  $calendarInfo = database('SELECT', 'store.color, businessday.businessday FROM store JOIN businessday ON store.id = businessday.storeid');
  foreach($calendarInfo as $val) {
    echo"\t\t{\n",
    "\t\t\t" . '"color":' . $val["color"] . ",\n",
    "\t\t\t" . '"businessday":' . $val["businessday"] . ",\n";
    if ($val == end($calendarInfo)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
  }
 ?>
}
