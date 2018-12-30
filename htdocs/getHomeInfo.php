{
	"shopinfo.php":[
<?php
require('database.php');
$storeInfo = database('SELECT', '* FROM store JOIN businessday ON store.id = businessday.storeid');
// DBアクセス結果をforeachで取り出す
foreach($storeInfo as $val) {
    echo"\t\t{\n",
        "\t\t\t" . '"name":' . $val["name"] . ",\n",
        "\t\t\t" . '"color":' . $val["color"] . ",\n",
        "\t\t\t" . '"phonenumber":' . $val["phonenumber"] . ",\n",
        "\t\t\t" . '"address":' . $val["address"] . ",\n",
        "\t\t\t" . '"businessday":' . $val["businessday"] . ",\n",
        "\t\t\t" . '"open":' . $val["open"] . ",\n",
        "\t\t\t" . '"close":' . $val["close"] . "\n";
    if ($val == end($storeInfo)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
}
?>
	],
    "event":[
<?php
$eventInfo = database('SELECT', '* FROM event');
foreach($eventInfo as $val) {
    echo"\t\t{\n",
        "\t\t\t" . '"isopen":' . $val["isopen"] . ",\n",
        "\t\t\t" . '"date":' . $val["date"] . ",\n",
        "\t\t\t" . '"open":' . $val["open"] . ",\n",
        "\t\t\t" . '"close":' . $val["close"] . "\n";
    if ($val == end($eventInfo)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
}
?>
    ]
}
