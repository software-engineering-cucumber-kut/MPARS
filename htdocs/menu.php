{
    "menuInfo":[
  <?php
  require('database.php');
  $menuInfo = database('SELECT', 'photo, price, description FROM item');
  foreach($menuInfo as $val) {
    echo"\t\t{\n",
    "\t\t\t" . '"photo":' . $val["photo"] . ",\n",
    "\t\t\t" . '"price":' . $val["price"] . ",\n",
    "\t\t\t" . '"description":' . $val["description"] . ",\n";
    if ($val == end($menuInfo)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
  }
  ?>
    ],
    "rateOfEvaluation":[
  <?php
  $reviewInfo = database('SELECT', 'itemid, AVG(evaluation) FROM review GROUP BY itemid');
  foreach($reviewInfo as $val) {
    echo"\t\t{\n",
    "\t\t\t" . '"itemid":' . $val["itemid"] . ",\n",
    "\t\t\t" . '"AVG(evaluation)":' . $val["AVG(evaluation)"] . ",\n";
    if ($val == end($reviewInfo)) {
        print("\t\t}\n");
    } else {
        print("\t\t},\n");
    }
  }
  ?>
    ]
}
