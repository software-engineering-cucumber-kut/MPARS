{
	"reserveProducts":[
<?php
require('database.php');
session_start();
if ($_SESSION["id"] != NULL) {
    $reserveProducts = database('SELECT', '* FROM reservation JOIN reservationitems ON reservationitems.reservationid = reservation.id WHERE reservation.userid = ' . $_SESSION["id"]);
    //$reserveProducts = database('SELECT', '* FROM reservation);
    // DBアクセス結果をforeachで取り出す
    foreach($reserveProducts as $val) {
        $itemdata = database('SELECT', '* FROM item WHERE id =' . $val["itemid"]);
        $itemdata = $itemdata[0];

        echo "\t\t{\n",
            "\t\t\t" . '"received":' . $val["received"] . ",\n",
            "\t\t\t" . '"reservationtime":"' . $val["reservationtime"] . '"' . ",\n",
            "\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
            "\t\t\t" . '"itemname":"' . preg_split("/===/", $itemdata["description"])[0] . '"' . ",\n",
            "\t\t\t" . '"amount":' . $val["amount"] . ",\n",
            "\t\t\t" . '"price":' . $itemdata["price"] . "\n";
        if ($val == end($reserveProducts)) {
            print("\t\t}\n");
        } else {
            print("\t\t},\n");
        }

        // print_r($itemdata);
    }

    //print_r($reserveProducts);
}

?>
	]
}
