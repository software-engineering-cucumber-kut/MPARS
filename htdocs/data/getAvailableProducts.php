{
	"products": [
<?php
  require('database.php');
  $items = database('SELECT', '* FROM item');

  foreach($items as $val) {
    // 在庫数取得
    $target = ' currentstock, nextstock FROM stock WHERE itemid = ' . $val["id"];

    $stocks       = database('SELECT', $target);
    $currentStock = intval($evaluation_obj[0]["currentstock"]);
    $nextStock    = intval($evaluation_obj[0]["nextstock"]);

      echo"\t\t{\n\t\t\t" . '"id":' . $val["id"] . ",\n",
          "\t\t\t" . '"name":' . $val["name"] . ",\n",
          "\t\t\t" . '"photo":' . $val["photo"] . ",\n",
          "\t\t\t" . '"description":' . $val["description"] . ",\n",
          "\t\t\t" . '"price":' . $val["price"] . ",\n",
          "\t\t\t" . '"currentstock":' . $currentStock . ",\n",
          "\t\t\t" . '"nextstock":' . $nextStock . "\n";
      add($val, $items);
  }

  function add($val, $vals) {
    if ($val == end($vals)) {
      print("\t\t}\n");
    } else {
      print("\t\t}, \n");
    }
  }
?>
	]
}
