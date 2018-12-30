{
	"menu":[
<?php
require('database.php');
$products = database('SELECT', '* FROM item');
//echo var_dump($products);
// DBアクセス結果をforeachで取り出す
foreach($products as $val) {
    // 評価の平均値を取得
    $target = 'AVG(evaluation) FROM review WHERE itemid = ' . $val["id"];
//    echo $target . "\n";
    $evaluation_obj = database('SELECT', $target);
    $evaluation = intval($evaluation_obj[0]["AVG(evaluation)"]);
//    echo var_dump($evaluation);

    $target = 'name FROM store WHERE id = ' . $val["storeid"];
    $storename_obj = database('SELECT', $target);
//    var_dump($storename_obj);
    $storename = $storename_obj[0]["name"];
//    echo var_dump($storename);
    echo"\t\t{\n",
        "\t\t\t" . '"id":' . $val["id"] . ",\n",
        "\t\t\t" . '"name":' . $val["name"] . ",\n",
        "\t\t\t" . '"photo":' . $val["photo"] . ",\n",
        "\t\t\t" . '"description":' . $val["description"] . ",\n",
        "\t\t\t" . '"price":' . $val["price"] . ",\n",
        "\t\t\t" . '"evaluation":' . $evaluation . ",\n",
        "\t\t\t" . '"storeid":' . $val["storeid"] . ",\n",
        "\t\t\t" . '"storename":' . $storename . "\n";
    if ($val == end($products)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
}
?>
    ]
}
