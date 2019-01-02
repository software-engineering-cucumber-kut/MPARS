{
	"success":<?php
session_start();
if (isset($_SESSION['id'])) {
    global $last_insert_id;

    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);
    $shopInfos = $json_obj->shopinfo;
//    var_dump($json_obj); 
//    var_dump($shopInfos); 
    foreach ($shopInfos as $shopInfo) {
//        var_dump($shopInfo);
        $shopId = database('SELECT', 'id from store WHERE name = ' . "'" . $shopInfo->name . "'");
//        var_dump($shopId);
        if ($shopId == NULL) {
//            echo "the store not found. create new record.\n";
            $target_string = 'INTO store (name, color, phonenumber, address) VALUES (' .
                "'" . $shopInfo->name . "'," .
                "'" . $shopInfo->color . "'," .
                "'" . $shopInfo->phonenumber . "'," .
                "'" . $shopInfo->address . "')";
//            echo 'Insert this:' . $target_string . "\n";
            $dbaccess_result = database('INSERT', $target_string);
//            var_dump($last_insert_id);
            if (!$dbaccess_result) {
                exit("0\n}\n");
            }
            $shopId = $last_insert_id;
        } else {
            $shopId = (int)$shopId[0]["id"];
//            var_dump($shopId);
            $target_string = 'store SET ' .
                "name = '" . $shopInfo->name . "'," .
                "color = '" . $shopInfo->color . "'," .
                "phonenumber = '" . $shopInfo->phonenumber . "'," .
                "address = '" . $shopInfo->address . "' WHERE id = " . $shopId;
//            echo "update target:" . $target_string . "\n";
            $dbaccess_result = database('UPDATE', $target_string);
//            var_dump($dbaccess_result);
        }
            /*
        $target_string = 'INTO store (id name, color, phonenumber, address) VALUES (' .
            "'" . $shopInfo->name . "'," .
            "'" . $shopInfo->color . "'," .
            "'" . $shopInfo->phonenumber . "'," .
            $shopInfo->address . ') ON DUPLICATE KEY UPDATE' .
            "name = '" . $shopInfo->name . "'," .
            "color = '" . $shopInfo->color . "'," .
            "phonenumber = '" . $shopInfo->phonenumber . "'," .
            "address = " . $shopInfo->address;
             */
//        echo "shopId:" . $shopId . "\n";

        $target_string = 'INTO businessday (storeid, businessday, open, close) VALUES (' .
            $shopId . "," .
            "'" . $shopInfo->businessday . "'," .
            "'" . $shopInfo->open . "'," .
            "'" . $shopInfo->close . "') ON DUPLICATE KEY UPDATE " .
            "businessday = '" . $shopInfo->businessday . "'," .
            "open = '" . $shopInfo->open . "'," .
            "close = '" . $shopInfo->close . "'";
//        echo $target_string . "\n";
        $dbaccess_result = database('INSERT', $target_string);
        if (!$dbaccess_result) {
            exit("0\n}\n");
        }
//        var_dump($dbaccess_result);
    }
    echo "1";
} else {
    echo "0";
}
?>

}
