{
	"success":
<?php
	session_start();
  require('database.php');
  $json_string = file_get_contents('php://input');
  $json_obj = json_decode($json_string);
  //var_dump($json_obj);
  //var_dump($json_obj->stock);
  // $stockInfos = $json_obj->stockinfo;
  // $stockId = database('SELECT', '* FROM stock WHERE id =' . $stockInfo["id"]);
  $stocks = $json_obj->stock;
  foreach($stocks as $stock) {
      //var_dump($stock->itemid);
      if (database('SELECT', '* FROM stock WHERE itemid = ' . $stock->itemid) == NULL) {
          $target_string = "INTO stock (itemid, currentstock, nextstock) VALUES(" .
              $stock->itemid . ", " .
              $stock->currentstock . ", " .
              $stock->nextstock . ")";
          //var_dump($target_string);
          $dbaccess_result = database('INSERT', $target_string);
      } else {
          $target_string = "stock SET " .
              " currentstock = " . $stock->currentstock . " ," .
              " nextstock = " . $stock->nextstock . " WHERE itemid = " . $stock->itemid . ";";
          //var_dump($target_string);
          $dbaccess_result = database('UPDATE', $target_string);
      }
      if (!$dbaccess_result) {
          break;
      }
  }
	if ($dbaccess_result) {
		echo "1";
	} else {
	  echo "0";
	}
?>

}
