{
	"reserveProducts":[
<?php
require('database.php');
$reserveProducts = database('SELECT', '* FROM reservation JOIN reservationitems ON reservationid = reservation.id');
// DBアクセス結果をforeachで取り出す
foreach($reserveProducts as $val) {
  $itemdata = database('SELECT', '* FROM item WHERE id =' . $val["id"]);
    $itemdata = $itemdata[0];
    
    echo"\t\t{\n",
        "\t\t\t" . '"received":' . $val["received"] . ",\n",
        "\t\t\t" . '"reseavationtime":' . $val["reseavationtime"] . ",\n",
         "\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
        "\t\t\t" . '"itemname":' . $itemdata["name"] . ",\n",
        "\t\t\t" . '"amount":' . $val["amount"] . ",\n",
          "\t\t\t" . '"price":' . $itemdata["price"] . ",\n";
    if ($val == end($reserveProducts)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
}
?>
	]
}