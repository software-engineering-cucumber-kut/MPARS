{
  <?php
  require('database.php');
  $json_string = file_get_contents('php://input');
  $json_obj = json_decode($json_string);

  $product_infos = database('SELECT', '* FROM item WHERE id = ' . strval($json_obj->itemid));
  $product_infos = $product_infos[0];
  $store_name = database('SELECT', 'name FROM store WHERE id = ' . $product_infos["storeid"]);
    echo "\t" . '"name":"' . $product_infos["name"] . "\",\n",
        "\t" . '"photo":"' . $product_infos["photo"] . "\",\n",
        "\t" . '"description":"' . $product_infos["description"] . "\",\n",
        "\t" . '"price":' . $product_infos["price"] . ",\n",
        "\t" . '"storename":"' . $store_name[0]["name"] . "\"\n";
  ?>
}
