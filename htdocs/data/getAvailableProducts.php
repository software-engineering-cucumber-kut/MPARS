{
	"products": [
<?php
  require('database.php');
  $items = database('SELECT', '* FROM item');

  foreach($items as $val) {
    // 在庫数取得
    $target = ' currentstock, nextstock FROM stock WHERE itemid = ' . $val["id"];

    $stocks       = database('SELECT', $target);
    $reservedNum  = intval(database('SELECT', 'SUM(amount) FROM reservation, reservationitems WHERE reservation.id = reservationitems.reservationid AND reservation.received = 0 AND reservationitems.itemid = ' . $val["id"])[0]["SUM(amount)"]);
    $currentStock = intval($stocks[0]["currentstock"]);
    $nextStock    = intval($stocks[0]["nextstock"]);

      echo"\t\t{\n\t\t\t" . '"id":' . $val["id"] . ",\n",
          "\t\t\t" . '"name":"' . $val["name"] . "\",\n",
          "\t\t\t" . '"photo":"' . $val["photo"] . "\",\n",
          "\t\t\t" . '"description":"' . $val["description"] . "\",\n",
          "\t\t\t" . '"price":' . $val["price"] . ",\n",
          "\t\t\t" . '"reservedNumber":' . $reservedNum . ",\n",
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
