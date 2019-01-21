{
    "success":<?php
    require('database.php');
    $json_string = file_get_contents('php://input');
    $json_obj = json_decode($json_string);

    $target_string = 'INTO request (contents) VALUES ('.
        "'" . $json_obj->contents . "')";
    $dbaccess_result = database('INSERT', $target_string);
    // insertできれば1
    if ($dbaccess_result) {
        echo "1";
    } else {
        echo "0";
    }
?> 
}
