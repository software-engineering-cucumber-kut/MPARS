{
	"AllReservation":[
<?php
require('database.php');
$products = database('SELECT', '* FROM reservation, reservationitems, item WHERE reservation.id = reservationitems.reservationid AND reservationitems.itemid = item.id');

$last_reservationid = $products[0]["reservationid"];
$userdata = database('SELECT', '* FROM studentuser WHERE id =' . $products[0]["userid"]);
if ($userdata == NULL) {
    $userdata = database('SELECT', '* FROM generaluser WHERE id =' . $products[0]["userid"]);
}
$userdata = $userdata[0];
$itemname = $products[0]["name"];
echo"\t\t{\n",
    "\t\t\t" . '"received":' . $products[0]["received"] . ",\n",
    "\t\t\t" . '"reservationtime":"' . $products[0]["reservationtime"] . "\",\n",
    "\t\t\t" . '"receiveday":"' . $products[0]["receiveday"] . "\",\n",
    "\t\t\t" . '"reservationid":' . $products[0]["reservationid"] . ",\n",
    "\t\t\t" . '"phonenumber":"' . $userdata["phonenumber"]. "\",\n",
    "\t\t\t" . '"mail":"' . $userdata["mail"] . "\",\n",
    "\t\t\t" . '"address":"' . $userdata["address"] . "\",\n\t\t\t\"reservationitems\":[\n",
    "\t\t\t\t{\n\t\t\t\t\t" . '"itemname":"' . $itemname . "\",\n",
    "\t\t\t\t\t" . '"amount":' . $products[0]["amount"] . "\n\t\t\t\t}";
// DBアクセス結果をforeachで取り出す
foreach($products as $val) {
    $itemname = $val["name"];
    if ($last_reservationid === $val["reservationid"]) {
        echo",\n\t\t\t\t{\n",
            "\t\t\t\t\t" . '"itemname":"' . $val["name"] . "\",\n",
            "\t\t\t\t\t" . '"amount":' . $val["amount"] . "\n\t\t\t\t}";
        if ($val == end($products)) {
            echo"\n\t\t\t]\n\t\t}\n";
        }
    } else {
        $userdata = database('SELECT', '* FROM studentuser WHERE id =' . $val["userid"]);
        if ($userdata == NULL) {
            $userdata = database('SELECT', '* FROM generaluser WHERE id =' . $val["userid"]);
        }
        $userdata = $userdata[0];

        if ($last_reservationid !== $products[0]) {
            echo"\n\t\t\t]\n\t\t},\n";
        }
        echo"\t\t{\n",
            "\t\t\t" . '"received":' . $val["received"] . ",\n",
            "\t\t\t" . '"reservationtime":"' . $val["reservationtime"] . "\",\n",
            "\t\t\t" . '"receiveday":"' . $val["receiveday"] . "\",\n",
            "\t\t\t" . '"reservationid":' . $val["reservationid"] . ",\n",
            "\t\t\t" . '"phonenumber":"' . $userdata["phonenumber"]. "\",\n",
            "\t\t\t" . '"mail":"' . $userdata["mail"] . "\",\n",
            "\t\t\t" . '"address":"' . $userdata["address"] . "\",\n\t\t\t\"reservationitems\":[\n",
            "\t\t\t\t{\n\t\t\t\t\t" . '"itemname":"' . $itemname . "\",\n",
            "\t\t\t\t\t" . '"amount":' . $val["amount"] . "\n\t\t\t\t}";
        $last_reservationid = $val["reservationid"];
        if ($val == end($products)) {
            echo"\n\t\t\t]\n\t\t}\n";
        }
    }
}
?>
	]
}
