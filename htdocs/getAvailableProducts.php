<?php
  require('database.php');
  $product = $_GET[itemid];
  $stock = $_GET[stock];

  foreach($stock as $val) {
    // 在庫数取得
    $target = ' currentstock FROM stock WHERE itemid = ' . $val["id"];

    $evaluation_obj = database('SELECT', $target);
    $evaluation = intval($evaluation_obj[0]["currentstock"]);

    if ($stock > $evaluation) {
      echo "\t\t\t" . '"itemid:"' . $val["itemid"] . ",\n",
           "\t\t\t" . '"currentstock:"' . $val["stock"] . ",\n";
      /*
      if ($val == end($evaluation_obj)) {
        print("\t\t}\n");
      } else {
        print("\t\t), \n");
      }
      */
      add();
    } else {
      echo "\t\t\t" . '"response:"' . '0' . ",\n";
      /*
      if ($val == end($evaluation_obj)) {
        print("\t\t}\n");
      } else {
        print("\t\t), \n");
      }
      */
      add();
    }
  }

  function add($val, $evaluation_obj) {
    if ($val == end($evaluation_obj)) {
      print("\t\t}\n");
    } else {
      print("\t\t), \n");
    }
  }
?>
