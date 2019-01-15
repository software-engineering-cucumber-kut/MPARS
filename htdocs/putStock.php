{
	"success":<?php
session_start();
if (isset($_SESSION['id'])) {
    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    
    $stockInfos = $json_obj->stockinfo;
    
    foreach ($stockInfos as $stockInfo) {
      $stockId = database('SELECT', '* FROM stock WHERE id =' . $stockInfo["id"]);
    	 $target_string = 'stock SET ' .
                "currentstock = '" . $stockInfo->currentstock . "'," .
                "nextstock = '" . $stockInfo->nextstock . "' WHERE id = " . $stockId;
            $dbaccess_result = database('UPDATE', $target_string);
    }
     echo "1";
} else {
    echo "0";
}
?>

}