{
	"AllReservation":[
<?php
require('database.php');
$products = database('SELECT', '* FROM reservation JOIN reservationitems ON reservationid = reservation.id');

// DBアクセス結果をforeachで取り出す
foreach($products as $val) {
    $userdata = database('SELECT', '* FROM studentuser WHERE id =' . $val["userid"]);
    if ($userdata == NULL) {
        $userdata = database('SELECT', '* FROM generaluser WHERE id =' . $val["userid"]);
    }
    $userdata = $userdata[0];
//    var_dump($userdata);
//    var_dump($val);

    echo"\t\t{\n",
        "\t\t\t" . '"received":' . $val["received"] . ",\n",
        "\t\t\t" . '"reseavationtime":' . $val["reseavationtime"] . ",\n",
        "\t\t\t" . '"receiveday":' . $val["receiveday"] . ",\n",
        "\t\t\t" . '"reservationid":' . $val["reservationid"] . ",\n",
        "\t\t\t" . '"amount":' . $val["amount"] . ",\n",
        "\t\t\t" . '"phonenumber":' . $userdata["phonenumber"]. ",\n",
        "\t\t\t" . '"mail":' . $userdata["mail"] . ",\n",
        "\t\t\t" . '"address":' . $userdata["address"] . "\n";
    if ($val == end($products)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
}
?>
	]
}
