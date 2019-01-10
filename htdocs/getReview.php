{
    “review”: [
<?php
require('database.php');
//$review = database('SELECT', '* FROM review');
foreach($review as $val) {
    // 評価の平均値を取得
    $target = 'AVG(evaluation) FROM review WHERE itemid = ' . $val["id"];
    //    echo $target . "\n";
    $evaluation_obj = database('SELECT', $target);
    $evaluation = intval($evaluation_obj[0]["AVG(evaluation)"]);
 echo"\t\t{\n",
        "\t\t\t" . '"reviewid":' . $val["id"] . ",\n",
		"\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
        "\t\t\t" . '"contents":' . $val["contents"] . ",\n",
	    "\t\t\t" . '"evaluation":' . $evaluation . ",\n",
        "\t\t\t" . '"datetime":' . $val["datetime"] . "\n";
        "\t\t\t" . '"reply":' . $val["replyid"] . "\n";
        //最後まで行ったときの処理
    if ($val == end($review)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
}
?>
    ]
}
