{
    "request": [
<?php
require('database.php');
$request = database('SELECT', ' * FROM request');
//配列requestから値(contents,date)を順に取り出し$valに格納
foreach($request as $val) {
  echo   "\t\t{\n",
         "\t\t\t" . '"id":' . $val["id"] . ",\n",
         "\t\t\t" . '"contents":"' . $val["contents"] . '"' . ",\n",
         "\t\t\t" . '"datetime":"' . $val["datetime"] . '"' . "\n";
         //最後まで行ったときの処理
  if ($val == end($request)) {
    print("\t\t}\n");
  } else {
    print("\t\t},\n");
  }
}
?>
    ]
}
