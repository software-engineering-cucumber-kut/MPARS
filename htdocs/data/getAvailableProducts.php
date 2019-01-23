{
  "Products": [
  <?php
    require('database.php');

    $target = ' item.id,
                item.name,
                item.photo,
                item.description,
                item.price,
                stock.currentstock,
                stock.nextstock
                FROM item, stock
                WHERE stock.itemid = item.id';

    $products = database('SELECT', $target);

    foreach($products as $val) {
      // 在庫数取得

      echo  "\t\t{\n",
            "\t\t\t" . '"id":' . $val["id"] . ",\n",
            "\t\t\t" . '"name":"' . $val["name"] . '"' . ",\n",
            "\t\t\t" . '"photo":"' . $val["photo"] . '"' . ",\n",
            "\t\t\t" . '"description":"' . $val["description"] . '"' . ",\n",
            "\t\t\t" . '"price":' . $val["price"] . ",\n",
            "\t\t\t" . '"currentstock":' . $val["currentstock"] . ",\n",
            "\t\t\t" . '"nextstock":' . $val["nextstock"] . "\n";

      if ($val == end($products)) {
        print("\t\t}\n");
      } else {
        print("\t\t), \n");
      }
    }

  ?>
  ]
}
