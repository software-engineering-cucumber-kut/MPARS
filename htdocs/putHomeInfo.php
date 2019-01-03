{
	"success":<?php
session_start();
if (isset($_SESSION['id'])) {
    global $last_insert_id;

    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    // 店舗情報とイベント情報を分ける
    $shopInfos = $json_obj->shopinfo;
    $eventInfos = $json_obj->event;

    // 先に店舗情報をDBに格納する
    foreach ($shopInfos as $shopInfo) {
        $shopId = database('SELECT', 'id from store WHERE name = ' . "'" . $shopInfo->name . "'");
        //  同名の店がなかった場合
        if ($shopId == NULL) {
//            echo "the store not found. create new record.\n";
            $target_string = 'INTO store (name, color, phonenumber, address) VALUES (' .
                "'" . $shopInfo->name . "'," .
                "'" . $shopInfo->color . "'," .
                "'" . $shopInfo->phonenumber . "'," .
                "'" . $shopInfo->address . "')";
//            echo 'Insert this:' . $target_string . "\n";
            $dbaccess_result = database('INSERT', $target_string);
            // insert失敗
            if (!$dbaccess_result) {
                exit("0\n}\n");
            }
            // 挿入したレコードのidを保管しておく（businessdayで検索するため）
            $shopId = $last_insert_id;
        } else {
            // 店があった場合．変更したレコードのidを保管しておく
            $shopId = (int)$shopId[0]["id"];
            $target_string = 'store SET ' .
                "name = '" . $shopInfo->name . "'," .
                "color = '" . $shopInfo->color . "'," .
                "phonenumber = '" . $shopInfo->phonenumber . "'," .
                "address = '" . $shopInfo->address . "' WHERE id = " . $shopId;
//            echo "update target:" . $target_string . "\n";
            $dbaccess_result = database('UPDATE', $target_string);
        }

        // 既に店があった場合はupdate
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
    }

    foreach ($eventInfos as $eventInfo) {
        $shopId = database('SELECT', 'id from store WHERE name = ' . "'" . $eventInfo->name . "'");
        if ($shopId == NULL) {
            exit("0\n}\n");
        }
        $shopId = $shopId[0]["id"];
        $target_string = 'INTO event (storeid, isopen, date, open, close) VALUES (' .
            $shopId . ', ' .
            $eventInfo->isopen . ', ' .
            "'" . $eventInfo->date . "', " .
            "'" . $eventInfo->open . "', " .
            "'" . $eventInfo->close . "')";
//        echo 'event insertion:' . $target_string . "\n";
        $dbaccess_result = database('INSERT', $target_string);
        if (!$dbaccess_result) {
            exit("0\n}\n");
        }
    }
    echo "1";
} else {
    echo "0";
    echo "missing session\n";
}
?>

}
