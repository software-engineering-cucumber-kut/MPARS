{
	"success":
<?php
	session_start();
  require('database.php');
  $json_string = file_get_contents('php://input');
  $json_obj = json_decode($json_string);
  // $stockInfos = $json_obj->stockinfo;
  // $stockId = database('SELECT', '* FROM stock WHERE id =' . $stockInfo["id"]);
  $target_string = "stock SET " .
              			 " currentstock = " . $json_obj->currentstock . " ," .
              			 " nextstock = " . $json_obj->nextstock . " WHERE id = " . $json_obj->stockId . ";";
  $dbaccess_result = database('UPDATE', $target_string);
	if ($dbaccess_result) {
		echo "1";
	} else {
	  echo "0";
	}
?>

}
